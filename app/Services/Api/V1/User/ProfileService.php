<?php

namespace App\Services\Api\V1\User;

use Illuminate\Support\Facades\Hash;

class ProfileService
{
    public function profile()
    {
        try {
            $data = auth('api')->user();
            return $data;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 400);
        }
    }

    public function updateProfile($request)
    {
        try {
            $data = auth('api')->user();
            if (!Hash::check($request->current_password, $data['password'])) {
                throw new \Exception('Current password is invalid', 400);
            }

            if (Hash::check($request->password, $data['password'])) {
                throw new \Exception('Password is same as before', 400);
            }

            $data->update([
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);
            return $data;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 400);
        }
    }
}
