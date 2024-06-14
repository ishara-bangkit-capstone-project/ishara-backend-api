<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\BaseApiController as Controller;
use App\Http\Requests\Api\V1\Admin\File\UpdateFileRequest;
use App\Http\Requests\Api\V1\Admin\File\UploadFileRequest;
use App\Http\Resources\Api\V1\Admin\File\ListAllFileCollection;
use App\Http\Resources\Api\V1\Admin\File\UploadFileResource;
use App\Services\Api\V1\Admin\FileService;
use Illuminate\Http\Request;

class FileController extends Controller
{
    protected FileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function listAllFiles(Request $request)
    {
        try {
            $data = $this->fileService->listAllFiles($request);
            $result = new ListAllFileCollection($data);

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage(), $e->getCode());
        }
    }

    public function showFile($id)
    {
        try {
            $data = $this->fileService->showFile($id);
            $result = new UploadFileResource($data, 'File found');

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage(), $e->getCode());
        }
    }

    public function uploadFile(UploadFileRequest $request)
    {
        try {
            $data = $this->fileService->uploadFile($request);
            $result = new UploadFileResource($data, 'File uploaded successfully');

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }

    public function updateFile($id, UpdateFileRequest $request)
    {
        try {
            $data = $this->fileService->updateFile($id, $request);
            $result = new UploadFileResource($data, 'File updated successfully');

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }

    public function deleteFile($id)
    {
        try {
            $data = $this->fileService->deleteFile($id);
            $result = new UploadFileResource($data, 'File deleted successfully');

            return $this->respond($result);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }
}
