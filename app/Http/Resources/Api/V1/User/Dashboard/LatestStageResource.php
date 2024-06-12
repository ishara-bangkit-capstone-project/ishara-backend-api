<?php

namespace App\Http\Resources\Api\V1\User\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LatestStageResource extends JsonResource
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
                'id' => $this->level->stage->id ?? $this->id,
                'name' => $this->level->stage->name ?? $this->name,
                'description' => $this->level->stage->description ?? $this->description,
                'continue_stage' => isset($this->level) ? [
                    'id' => $this->level->id,
                    'name' => $this->level->name,
                ] : ['User belum mengerjakan level apapun'],
            ],
            'meta' => [
                'success' => true,
                'message' => 'Success Get Latest Stage',
                'pagination' => (object)[],
            ],
        ];
    }
}
