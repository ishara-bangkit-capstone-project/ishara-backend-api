<?php

namespace App\Services\Api\V1\User;

use App\Models\Stage;
use App\Models\UserLevelStar;

class DashboardService
{
    /**
     * @return mixed
     */
    public function getLatestStage(): mixed
    {
        $user = auth()->user();

        // Get Latest Updated Stage from User Level Stars
        $latestStage = UserLevelStar::where('user_id', $user->id)
            ->with('level.stage')
            ->orderBy('updated_at', 'desc')
            ->first();

        if (!$latestStage) {
            // Get First Stage
            $latestStage = Stage::with('levels')->first();
        }

        return $latestStage;
    }
}
