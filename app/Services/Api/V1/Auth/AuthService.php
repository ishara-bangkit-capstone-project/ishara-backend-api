<?php

namespace App\Services\Api\V1\Auth;

use App\Models\User;

class AuthService {
    public function login($request)
    {
        if ($token = auth('api')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $data = auth('api')->user();
            $data['token'] = $token;
            return $data;
        } else {
            throw new \Exception('Wrong email or password', 400);
        }
    }

    public function register($request)
    {
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $data->assignRole('user');

        return $data;
    }
}
