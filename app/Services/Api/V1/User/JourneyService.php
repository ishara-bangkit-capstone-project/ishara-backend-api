<?php

namespace App\Services\Api\V1\User;

use App\Models\Question;
use App\Models\Stage;
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
}
