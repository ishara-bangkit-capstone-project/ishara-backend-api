<?php

namespace App\Services\Api\V1\User;

use App\Models\Level;
use App\Models\Question;
use App\Models\Stage;
use App\Models\UserLevelStar;
use Exception;

class JourneyService
{
    public function getAllStages($request)
    {
        $per_page = $request->per_page ?? 10;
        $page = $request->page ?? 1;
        $user = $request->user();

        $stages = Stage::select('id', 'name', 'description', 'minimum_stars', 'created_at', 'updated_at')
            ->with('levels', function ($query) {
                $query->select('id', 'stage_id', 'name')
                    ->orderBy('id', 'asc')
                    ->with('userLevelStar', function ($query) {
                        $query->select('id', 'user_id', 'level_id', 'obtained_stars')
                            ->where('user_id', auth()->id());
                    });
            })
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

    public function getAllQuestionsInLevel($levelId)
    {
        $questions = Question::where('level_id', $levelId)
            ->select('id', 'level_id', 'type', 'title', 'question', 'answer', 'image')
            ->with(
                [
                    'answers' => function ($query) {
                        $query->select('id', 'question_id', 'answer', 'is_correct');
                    },
                    'level' => function ($query) {
                        $query->select('id', 'name');
                    }],
            )
            ->get();

        if ($questions->isEmpty()) {
            throw new Exception('No questions found in this level');
        }

        return $questions;
    }

    public function saveUserLevelStars($levelId, $request)
    {
        $user_id = auth('api')->id();

        // Check if user has already obtained stars for this level
        // If yes, update the stars (only if obtained stars is greater than the previous obtained stars)
        // If no, create a new record
        $userLevelStar = UserLevelStar::where('user_id', $user_id)
            ->where('level_id', $levelId)
            ->first();

        if ($userLevelStar) {
            if ($request->obtained_stars > $userLevelStar->obtained_stars) {
                $userLevelStar->update(['obtained_stars' => $request->obtained_stars]);
            } else {
                throw new Exception('Obtained stars should be greater than the previous obtained stars');
            }
        } else {
            $userLevelStar = UserLevelStar::create([
                'user_id' => $user_id,
                'level_id' => $levelId,
                'obtained_stars' => $request->obtained_stars,
            ]);
        }

        return $userLevelStar;
    }

    public function getAllLevelInStage($stageId) {
        $levels = Level::where('stage_id', $stageId)
            ->select('id', 'stage_id', 'name')
            ->with(
                [
                    'stage' => function($query) {
                        $query->select('id', 'name', 'description', 'minimum_stars');
                    }
                ]
            )->get();
        
        if($levels->isEmpty()) {
            throw new Exception('No levels found in this stage');
        }

        return $levels;
    }
}
