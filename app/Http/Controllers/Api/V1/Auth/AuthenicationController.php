<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Auth\StoreRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthenicationController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(StoreRegistrationRequest $request): JsonResponse
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

        return ApiResponseClass::sendResponse($data, 'User registered and logged in successfully', 200);
    }
}
