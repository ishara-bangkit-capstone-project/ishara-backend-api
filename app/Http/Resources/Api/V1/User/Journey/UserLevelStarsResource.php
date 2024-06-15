<?php

namespace App\Http\Resources\Api\V1\User\Journey;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserLevelStarsResource extends JsonResource
{
    private string $message;

    public function __construct($resource, string $message)
    {
        // Ensure you call the parent constructor
        parent::__construct($resource);
        $this->resource = $resource;

        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'id' => $this->id,
                'obtained_stars' => $this->obtained_stars,
                'level' => [
                    'id' => $this->level->id,
                    'name' => $this->level->name,
                ],
            ],
            'meta' => [
                'success' => true,
                'message' => $this->message,
                'pagination' => (object)[],
            ],
        ];
    }
}
