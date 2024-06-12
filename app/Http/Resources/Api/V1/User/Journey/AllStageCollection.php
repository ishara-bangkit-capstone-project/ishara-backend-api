<?php

namespace App\Http\Resources\Api\V1\User\Journey;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AllStageCollection extends ResourceCollection
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
                'pagination' => $this->metaData(),
            ],
        ];
    }

    public function transformData($data): array
    {
        return [
            'id' => $data->id,
            'name' => $data->name,
            'description' => $data->description,
            'is_unlocked' => $data->is_unlocked,
            'levels' => $data->levels->transform(function ($level) {
                return [
                    'id' => $level->id,
                    'name' => $level->name,
                    'user_level_star' => $level->userLevelStar ? [
                        'id' => $level->userLevelStar->id,
                        'obtained_stars' => $level->userLevelStar->obtained_stars,
                    ] : null
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
