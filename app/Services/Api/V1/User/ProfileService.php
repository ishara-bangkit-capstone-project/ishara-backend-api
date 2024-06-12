<?php

namespace App\Services\Api\V1\User;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    /**
     *
     * Get Current Authenticated User data
     *
     * @return Authenticatable|null
     */
    public function profile(): ?Authenticatable
    {
        return auth('api')->user();
    }

    /**
     *
     * Update authenticated user profile
     *
     * @param $request
     * @return Authenticatable|null
     * @throws \Exception
     */
    public function updateProfile($request): ?Authenticatable
    {
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
    }

    /**
     *
     * Get total obtained user stars
     *
     * @return mixed
     */
    public function getTotalStars(): mixed
    {
        $user_id = auth('api')->id();


        return User::select('id')->where('id', $user_id)->with('user_level_stars')->first();
    }
}
