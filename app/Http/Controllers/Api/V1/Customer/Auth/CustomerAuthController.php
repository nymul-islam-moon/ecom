<?php

namespace App\Http\Controllers\Api\V1\Customer\Auth;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Customer\Auth\StoreCustomerRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class CustomerAuthController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(StoreCustomerRegistrationRequest $request): JsonResponse
    {
        $formData = $request->validated();

        $user = User::create([
            'name' => $formData['name'],
            'email' => $formData['email'],
            'password' => Hash::make($formData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'token' => $token,
            'token_type' => 'Bearer',
        ];

        return ApiResponseClass::sendResponse($data, 'Successfully registered and login as customer', 200);
    }
}
