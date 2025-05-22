<?php

namespace App\Http\Controllers\Api\V1\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Auth\StoreRegistrationRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Classes\ApiResponseClass;

class AdminAuthController extends Controller
{

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(StoreRegistrationRequest $request): JsonResponse
    {
        $formData = $request->validated();

        $user = Admin::create([
            'name' => $formData['name'],
            'email' => $formData['email'],
            'username' => $formData['username'],
            'password' => Hash::make($formData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'token' => $token,
            'token_type' => 'Bearer',
        ];

        return ApiResponseClass::sendResponse($data, 'Admin registered and logged in successfully', 200);
    }
}
