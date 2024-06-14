<?php

namespace App\Http\Resources\Api\V1\Admin\File;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ListAllFileCollection extends ResourceCollection
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
                'message' => 'Success get All File',
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
            'full_url' => $data->full_path,
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
