<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreAttributeValueRequest;
use App\Http\Requests\Api\Admin\UpdateAttributeValueRequest;
use App\Http\Resources\AttributeValueResource;
use App\Interfaces\Admin\AttributeValueRepositoryInterface;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeValueController extends Controller
{
    public function __construct(protected AttributeValueRepositoryInterface $attributeValueRepository)
    {
        $this->attributeValueRepository = $attributeValueRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $attributes = $this->attributeValueRepository->get($request);

        return ApiResponseClass::sendResponse(AttributeValueResource::collection($attributes), 'Attribute Values fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeValueRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();
        try {

            $attributeValue = $this->attributeValueRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new AttributeValueResource($attributeValue), 'Attribute Created Success');
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create attribute value!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($attribute_value)
    {
        try {
            $attribute_value_instance = AttributeValue::findOrFail($attribute_value);

            return ApiResponseClass::sendResponse(new AttributeValueResource($attribute_value_instance), 'Attribute fetched successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Attribute value not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeValueRequest $request, $attribute_value)
    {
        DB::beginTransaction();
        try {
            $attribute_value_instance = AttributeValue::findOrFail($attribute_value);
            $formData = $request->validated();
            $this->attributeValueRepository->update($formData, $attribute_value_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new AttributeValueResource($attribute_value_instance), 'Attribute value updated successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to update attribute value!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($attribute_value)
    {
        DB::beginTransaction();
        try {
            $attribute_value_instance = AttributeValue::findOrFail($attribute_value);
            $this->attributeValueRepository->destroy($attribute_value_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new AttributeValueResource($attribute_value_instance), 'Attribute value deleted successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to delete attribute value!');
        }
    }
}
