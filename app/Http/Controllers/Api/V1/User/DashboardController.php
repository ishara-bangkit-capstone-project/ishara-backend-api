<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\BaseApiController as Controller;
use App\Http\Resources\Api\V1\User\Dashboard\LatestStageResource;
use App\Services\Api\V1\User\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected DashboardService $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function getLatestStage()
    {
        try {
            $data = $this->dashboardService->getLatestStage();
            $result = new LatestStageResource($data);

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage(), $e->getCode());
        }
    }
}
