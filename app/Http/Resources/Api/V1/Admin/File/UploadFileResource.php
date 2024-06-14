<?php

namespace App\Http\Resources\Api\V1\Admin\File;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UploadFileResource extends JsonResource
{
    protected $message;

    public function __construct($resource, $message)
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
                'description' => $this->description,
                'full_url' => $this->full_path,
                'url' => $this->url,
                'path_name' => $this->path_name,
                'file_name' => $this->file_name,
                'extension' => $this->extension,
                'size' => $this->size . ' KB',
            ],
            'meta' => [
                'success' => true,
                'message' => $this->message,
                'pagination' => (object)[],
            ],
        ];
    }
}
