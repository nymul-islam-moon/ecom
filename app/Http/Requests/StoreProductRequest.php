<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'Product Name',
            'description' => 'Product Description',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            /** General Information */
            'name' => 'required|string',
            'description' => 'required|string',
            'short_description' => 'required|string',

            /** Pricing */
            'price' => 'required|numeric',
            'sale_price' => 'sometimes|nullable|numeric',

            /** Stock Managment */
            'stock_quantity' => 'required|numeric',
            'low_stock_threshold' => 'required|numeric',
            'restock_date' => 'required',

            /** Product type */
            'product_type' => 'required|string|in:subscription,digital,physical',

            /** Physical Product */
            'weight' => ['required_if:product_type,physical'],
            'dimensions' => ['required_if:product_type,physical'],

            /** Digital Product */
            'download_url' => ['required_if:product_type,digital'],
            'license_key' => ['required_if:product_type,digital'],

            /** Subscription Based Product */
            'subscription_interval' => ['required_if:product_type,subscription'],

            // seo
            'meta_title' => 'nullable',
            'meta_keywords' => 'nullable',
            'meta_description' => 'nullable',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Product Name Required',
            'description.required' => 'Product Description Required',
            'product_type.required' => 'Please select a product type. The available types are Physical, Digital, or Subscription.',
            'product_type.in' => 'Invalid product type selected. The allowed types are Physical, Digital, or Subscription.',
            'weight.required_if' => 'The weight field is required when the product type is Physical.',
            'dimensions.required_if' => 'The dimensions field is required when the product type is Physical.',
            'download_url.required_if' => 'The download URL field is required when the product type is Digital.',
            'license_key.required_if' => 'The license key field is required when the product type is Digital.',
            'subscription_interval.required_if' => 'The Subscription interval field is required when the product type is Subscription.',
        ];
    }
}
