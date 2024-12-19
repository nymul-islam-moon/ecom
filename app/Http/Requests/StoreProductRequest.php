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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'short_description' => 'required',

            'price' => 'required|numeric',
            'sale_price' => 'sometimes|nullable|numeric',

            'stock_quantity' => 'required|numeric',
            'low_stock_threshold' => 'required|numeric',
            'restock_date' => 'required',

        ];
    }
}
