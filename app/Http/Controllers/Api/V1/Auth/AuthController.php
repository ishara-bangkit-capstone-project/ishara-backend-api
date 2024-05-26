<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\BaseApiController as Controller;
use App\Http\Requests\Api\V1\Auth\LoginRequest;
use App\Http\Resources\Api\V1\Auth\LoginResource;
use App\Services\Api\V1\Auth\AuthService;

class AuthController extends Controller
{
    public function login(LoginRequest $request, AuthService $authService): \Illuminate\Http\JsonResponse
    {
        try {
            $data = $authService->login($request);

            $data = new LoginResource($data, 'Success Login');
            return $this->respond($data);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        try {
            auth('api')->logout();
            return $this->respond([
                'meta' => [
                    'success' => true,
                    'message' => 'Success Logout'
                ],
            ]);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }
}
