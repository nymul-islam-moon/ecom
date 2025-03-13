<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreBrandRequest;
use App\Http\Resources\Admin\BrandResource;
use App\Interfaces\Admin\BrandRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function __construct(protected BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brands = $this->brandRepository->get($request);

        return ApiResponseClass::sendResponse(BrandResource::collection($brands), 'Brands fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {
            $fileDirectory = 'uploads/brands';
            if (! Storage::disk('public')->exists($fileDirectory)) {
                Storage::disk('public')->makeDirectory($fileDirectory);
                chmod(storage_path("app/public/{$fileDirectory}"), 0775); // Set read-write-execute permissions
            }

            if ($request->hasFile('logo')) {
                $formData['logo'] = $request->file('logo')->store('uploads/brands', 'public');
            }

            $brand = $this->brandRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new BrandResource($brand), 'Brand Created Success');
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create brand!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
