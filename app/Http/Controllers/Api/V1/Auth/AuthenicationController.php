<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Auth\StoreRegistrationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return ApiResponseClass::sendResponse(null, 'Validation failed', 422, $validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return ApiResponseClass::sendResponse(null, 'Invalid email or password', 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'token' => $token,
            'token_type' => 'Bearer',
        ];

        return ApiResponseClass::sendResponse($data, 'User logged in successfully', 200);
    }

    public function logout(Request $request): JsonResponse
    {
        $token = $request->user()->currentAccessToken();

        if ($token) {
            $token->delete(); // <- this deletes the token from the DB

            return ApiResponseClass::sendResponse(null, 'User logged out successfully', 200);
        }

        return ApiResponseClass::sendResponse(null, 'No active token found', 400);
    }
}
