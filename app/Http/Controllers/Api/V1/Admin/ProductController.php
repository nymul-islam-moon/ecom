<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreProductRequest;
use App\Http\Resources\Admin\ProductResource;
use App\Interfaces\Admin\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->get($request);

        return ApiResponseClass::sendResponse(
            ProductResource::collection($products)->response()->getData(true),
            'Products fetched successfully',
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $formData = $request->validated();

        dd($formData);
        DB::beginTransaction();

        try {
            $product = $this->productRepository->store($formData);


            DB::commit();

            return ApiResponseClass::sendResponse(new ProductResource($product), 'Product Created Success');
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create product value!');
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
