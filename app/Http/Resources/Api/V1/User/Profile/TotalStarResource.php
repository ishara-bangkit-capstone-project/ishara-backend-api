<?php

namespace App\Http\Resources\Api\V1\User\Profile;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TotalStarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'total_stars' => $this->total_stars,
            ],
            'meta' => [
                'success' => true,
                'message' => 'Success Get User Total Stars',
                'pagination' => (object)[],
            ],
        ];
    }
}
