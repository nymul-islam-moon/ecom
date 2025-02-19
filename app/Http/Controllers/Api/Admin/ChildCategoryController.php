<?php

namespace App\Http\Controllers\Api\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreChildCategoryRequest;
use App\Http\Resources\ChildCategoryResource;
use App\Interfaces\ChildCategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildCategoryController extends Controller
{
    protected $childCategoryRepository;

    public function __construct(ChildCategoryRepositoryInterface $childCategoryRepositoryInterface)
    {
        $this->childCategoryRepository = $childCategoryRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subCategories = $this->childCategoryRepository->get($request);

        return ApiResponseClass::sendResponse(ChildCategoryResource::collection($subCategories), 'Child-Category fetched successfully', 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $formData = $request->validated();
            $subCategory = $this->childCategoryRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new ChildCategoryResource($subCategory), 'SubCategory created successfully', 201);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create SubCategory!');
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
