<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::simplePaginate(2);

        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        // Validate and retrieve form data
        $formData = $request->validated();

        if (isset($formData['logo']) && $request->hasFile('logo')) {
            $logo = $formData['logo'];

            // Generate a unique filename
            $filename = time().'_'.uniqid().'.'.$logo->getClientOriginalExtension();

            // Define a directory for storing the file
            $destinationPath = public_path('photos');

            try {
                // Move the uploaded file to the designated directory
                $logo->move($destinationPath, $filename);

                // Store the filename in the form data
                $formData['logo'] = $filename;
            } catch (\Exception $e) {
                return back()->withErrors(['logo' => 'Failed to upload logo: '.$e->getMessage()]);
            }
        }

        try {
            // Create the brand using the form data
            Brand::create($formData);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to create brand: '.$e->getMessage()]);
        }

        return back()->with('success', 'Brand created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        // Validate and retrieve form data
        $formData = $request->validated();

        if (isset($formData['logo']) && $request->hasFile('logo')) {
            $logo = $formData['logo'];

            // Generate a unique filename
            $filename = time().'_'.uniqid().'.'.$logo->getClientOriginalExtension();

            // Define a directory for storing the file
            $destinationPath = public_path('photos');

            try {
                // Remove the existing logo if it exists
                if ($brand->logo && file_exists(public_path('photos/'.$brand->logo))) {
                    unlink(public_path('photos/'.$brand->logo));
                }

                // Move the uploaded file to the designated directory
                $logo->move($destinationPath, $filename);

                // Store the filename in the form data
                $formData['logo'] = $filename;
            } catch (\Exception $e) {
                return back()->withErrors(['logo' => 'Failed to upload logo: '.$e->getMessage()]);
            }
        }

        try {
            // Update the brand using the form data
            $brand->update($formData);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to update brand: '.$e->getMessage()]);
        }

        return back()->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return back()->with('success', 'Brand deleted successfully');
    }

    public function searchBrands(Request $request): JsonResponse
    {
        $query = $request->input('query');
        $brands = Brand::where('name', 'LIKE', "%{$query}%")
            ->take(10)
            ->get(['id', 'name']);

        return response()->json($brands);
    }
}
