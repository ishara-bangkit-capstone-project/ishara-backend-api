<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\BaseApiController as Controller;
use App\Http\Requests\Api\V1\User\UpdateProfileRequest;
use App\Http\Resources\Api\V1\User\Profile\TotalStarResource;
use App\Http\Resources\Api\V1\User\ProfileResource;
use App\Services\Api\V1\User\ProfileService;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    protected ProfileService $profileService;

    /**
     * @param ProfileService $profileService
     */
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    /**
     * @return JsonResponse
     */
    public function profile(): JsonResponse
    {
        try {
            $data = $this->profileService->profile();

            $data = new ProfileResource($data, 'Success Get Profile');
            return $this->respond($data);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param UpdateProfileRequest $request
     * @return JsonResponse
     */
    public function updateProfile(UpdateProfileRequest $request): JsonResponse
    {
        try {
            $data = $this->profileService->updateProfile($request);

            $data = new ProfileResource($data, 'Success Update Profile');
            return $this->respond($data);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @return JsonResponse
     */
    public function getTotalStars(): JsonResponse
    {
        try {
            $data = $this->profileService->getTotalStars();
            $result = new TotalStarResource($data);

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage(), $e->getCode());
        }
    }
}
