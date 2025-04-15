<?php

namespace App\Http\Requests\Api\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendorRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:vendors,email',
            'phone' => 'required|string|max:15|unique:vendors,phone',
            // 'password' => 'nullable|string|min:8', // password will be generated in the controller
            'company_name' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'status' => 'required|in:pending,approved,rejected,suspended',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
            'description' => 'nullable|string',
            'commission' => 'nullable|numeric|min:0|max:100', // Commission must be between 0 and 100
            'business_license_number' => 'nullable|string|max:255',
            'business_license_document' => 'nullable|file|mimes:pdf,jpg,png|max:10240', // Only allowing PDFs and images
        ];
    }
}
