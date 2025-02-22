<?php

namespace App\Http\Controllers\Api\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Resources\VendorResource;
use App\Interfaces\VendorRepositoryInterface;
use Illuminate\Http\Request;

class VendorController extends Controller
{

    private $vendorRepository;

    public function __construct(VendorRepositoryInterface $vendorRepositoryInterface)
    {
        // $this->vendorRepository = $vendorRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        dd('hi');
        $vendors = $this->vendorRepository->get($request);

        return ApiResponseClass::sendResponse(VendorResource::collection($vendors), 'Vendor fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
