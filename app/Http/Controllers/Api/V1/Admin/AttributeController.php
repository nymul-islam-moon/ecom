<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreAttributeRequest;
use App\Http\Requests\Api\Admin\UpdateAttributeRequest;
use App\Http\Resources\AttributeResource;
use App\Interfaces\Admin\AttributeRepositoryInterface;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    public function __construct(protected AttributeRepositoryInterface $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $attributes = $this->attributeRepository->get($request);

        return ApiResponseClass::sendResponse(AttributeResource::collection($attributes), 'Attributes fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {

            $attribute = $this->attributeRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new AttributeResource($attribute), 'Attribute Created Success');
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create attribute!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($attribute)
    {
        try {
            $attribute_instance = Attribute::findOrFail($attribute);

            return ApiResponseClass::sendResponse(new AttributeResource($attribute_instance), 'Attribute fetched successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Attribute not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeRequest $request, $attribute)
    {
        DB::beginTransaction();
        try {
            $attribute_instance = Attribute::findOrFail($attribute);
            $formData = $request->validated();
            $this->attributeRepository->update($formData, $attribute_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new AttributeResource($attribute_instance), 'Attribute updated successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to update attribute!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($attribute)
    {
        DB::beginTransaction();
        try {
            $attribute_instance = Attribute::findOrFail($attribute);
            $this->attributeRepository->destroy($attribute_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new AttributeResource($attribute_instance), 'Attribute deleted successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to delete attribute!');
        }
    }
}
