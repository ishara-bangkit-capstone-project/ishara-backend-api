<?php

namespace App\Http\Resources\Api\V1\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->roles->first()->name,
                'total_stars' => $this->total_stars,
            ],
            'meta' => [
                'success' => true,
                'message' => $this->message,
                'pagination' => (object)[],
            ],
        ];
    }
}
