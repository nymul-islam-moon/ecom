<?php

namespace App\Http\Requests\Api\Customer\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRegistrationRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|confirmed',
        ];
    }
}
