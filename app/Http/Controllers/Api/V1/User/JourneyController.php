<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\BaseApiController as Controller;
use App\Http\Resources\Api\V1\User\Journey\AllStageCollection;
use App\Services\Api\V1\User\JourneyService;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    protected JourneyService $journeyService;

    public function __construct(JourneyService $journeyService)
    {
        $this->journeyService = $journeyService;
    }

    public function getAllStages(Request $request)
    {
        try {
            $stages = $this->journeyService->getAllStages($request);
            $result = new AllStageCollection($stages);

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }
}
