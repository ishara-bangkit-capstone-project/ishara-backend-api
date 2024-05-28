<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\BaseApiController as Controller;
use App\Http\Requests\Api\V1\Auth\LoginRequest;
use App\Http\Requests\Api\V1\Auth\RegisterRequest;
use App\Http\Resources\Api\V1\Auth\LoginResource;
use App\Http\Resources\Api\V1\Auth\RegisterResource;
use App\Services\Api\V1\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(LoginRequest $request, AuthService $authService): JsonResponse
    {
        try {
            $data = $authService->login($request);

            $data = new LoginResource($data, 'Login success');
            return $this->respond($data);
        } catch (\Exception $e) {
            Log::write('error', $e->getMessage());
            return $this->ApiExceptionError($e->getMessage());
        }
    }

    public function logout(): JsonResponse
    {
        try {
            auth('api')->logout();
            return $this->respond([
                'meta' => [
                    'success' => true,
                    'message' => 'Logout success'
                ],
            ]);
        } catch (\Exception $e) {
            Log::write('error', $e->getMessage());
            return $this->ApiExceptionError($e->getMessage());
        }
    }

    public function register(RegisterRequest $request, AuthService $authService): JsonResponse
    {
        try {
            $data = $authService->register($request);

            $data = new RegisterResource($data, 'User registered successfully');
            return $this->respond($data);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }
}
