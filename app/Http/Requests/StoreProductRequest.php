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
            'name' => 'Product Name'
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
            'name' => 'required|string',
            'description' => 'required|string',
            'short_description' => 'required|string',

            'price' => 'required|numeric',
            'sale_price' => 'sometimes|nullable|numeric',

            'stock_quantity' => 'required|numeric',
            'low_stock_threshold' => 'required|numeric',
            'restock_date' => 'required',

            'product_type' => 'required|numeric',
            'weight' => ['required_if:product_type,1'],

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
        ];
    }
}
