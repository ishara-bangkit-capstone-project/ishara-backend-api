<?php

namespace App\Services\Api\V1\Admin;

use App\Models\File;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as FileHelper;

class FileService
{
    public function listAllFiles($request)
    {
        $search = $request->search;
        $per_page = $request->per_page ?: 10;
        $sort_by = $request->sort_by ?: 'id';
        $order_by = $request->order_by ?: 'asc';

        return File::select('id', 'name', 'description','url', 'path_name')
            ->when(request('search' ), function ($query) use ($search) {
                return $query->where('name', 'like', '%'.$search.'%');
            })
            ->where('name', 'like', '%'.$search.'%')
            ->orderBy($sort_by, $order_by)
            ->paginate($per_page)
            ->withQueryString();
    }

    public function showFile($id)
    {
        $file = File::select('id', 'name', 'description','url', 'path_name', 'file_name', 'extension', 'size')
            ->find($id);

        if (!$file) {
            throw new Exception('File not found', 404);
        }

        return $file;
    }

    public function uploadFile($request)
    {
        $file = $request->file('file');
        $fileName = Str::random(20);
        $extension = $file->getClientOriginalExtension();
        $path = date('Y').'/'.date('m').'/'.date('d');
        $size = round($file->getSize() / 1024);
        $pathName = '/file/'.$path.'/'.$fileName.'.'.$extension;

        $storeFile = $file->storeAs('file/'.$path, $fileName.'.'.$extension, 'gcs');

        Storage::disk('gcs')->url($storeFile);

        $data = File::create([
            'name' => $request->name,
            'description' => $request->description,
            'url' => 'https://storage.googleapis.com/ishara_file_storage',
            'path_name' => $pathName,
            'file_name' => $fileName,
            'extension' => $extension,
            'size' => $size
        ]);

        return $data;
    }

    public function updateFile($id, $request)
    {
        $file_data = File::find($id);
        $data = [];

        if (!$file_data) {
            throw new Exception('File not found', 404);
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = Str::random(20);
            $extension = $file->getClientOriginalExtension();
            $path = date('Y').'/'.date('m').'/'.date('d');
            $size = round($file->getSize() / 1024);
            $pathName = '/file/'.$path.'/'.$fileName.'.'.$extension;

            $oldPathName = Str::replaceFirst('/', '', $file_data->path_name);
            Storage::disk('gcs')->delete($oldPathName);

            $storeFile = $file->storeAs('file/'.$path, $fileName.'.'.$extension, 'gcs');
            Storage::disk('gcs')->url($storeFile);

            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'url' => 'https://storage.googleapis.com/ishara_file_storage',
                'path_name' => $pathName,
                'file_name' => $fileName,
                'extension' => $extension,
                'size' => $size
            ];
        } else {
            $data = [
                'name' => $request->name,
                'description' => $request->description,
            ];
        }

        $file_data->update($data);

        return $file_data;
    }

    public function deleteFile($id)
    {
        $file = File::find($id);

        if (!$file) {
            throw new Exception('File not found', 404);
        }

        $path_name = Str::replaceFirst('/', '', $file->path_name);
        dd($path_name);
        Storage::disk('gcs')->delete($path_name);

        $file->delete();

        return $file;
    }
}
