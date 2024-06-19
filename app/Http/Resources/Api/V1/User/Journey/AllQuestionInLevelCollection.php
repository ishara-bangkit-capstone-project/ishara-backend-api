<?php

namespace App\Http\Resources\Api\V1\User\Journey;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AllQuestionInLevelCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->transformCollection($this->collection),
            'meta' => [
                'success' => true,
                'message' => 'Success get All Stages',
                'pagination' => (object) [],
            ],
        ];
    }

    public function transformData($data): array
    {
        $answer = $data->answer;
        $image = $data->image;

        if ($data->type == 'sequence') {
            $answer = json_decode($answer, true);
            $image = json_decode(json_decode($image), true);
            $answer = $answer['answer'];
        }

        return [
            'id' => $data->id,
            'type' => $data->type,
            'title' => $data->title,
            'question' => $data->question,
            'correct_answer' =>  $answer,
            'image' =>  $image,
            'answers' => $data->answers->transform(function ($answer) {
                return [
                    'id' => $answer->id,
                    'answer' => $answer->answer,
                    'is_correct' => (bool) $answer->is_correct,
                ];
            }),
        ];
    }

    private function transformCollection($collection)
    {
        return $collection->transform(function ($data) {
            return $this->transformData($data);
        });
    }

    private function metaData(): array
    {
        return [
            "total" => $this->total(),
            "count" => $this->count(),
            "per_page" => (int)$this->perPage(),
            "current_page" => $this->currentPage(),
            "total_pages" => $this->lastPage(),
            "links" => [
                "next" => $this->nextPageUrl(),
                "previous" => $this->previousPageUrl(),
            ],
        ];
    }
}
