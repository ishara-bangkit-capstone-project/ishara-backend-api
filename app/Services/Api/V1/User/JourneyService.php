<?php

namespace App\Services\Api\V1\User;

use App\Models\Stage;

class JourneyService
{
    public function getAllStages($request)
    {
        $per_page = $request->per_page ?? 10;
        $page = $request->page ?? 1;
        $user = $request->user();

        $stages = Stage::select('id', 'name', 'description', 'minimum_stars', 'created_at', 'updated_at')
            ->paginate($per_page, ['*'], 'page', $page)->withQueryString();

        foreach ($stages as $stage) {
            if ($user->total_stars >= $stage->minimum_stars) {
                $stage->is_unlocked = true;
            } else {
                $stage->is_unlocked = false;
            }
        }

        return $stages;
    }
}
