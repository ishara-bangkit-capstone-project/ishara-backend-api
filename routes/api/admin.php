<?php

use App\Http\Controllers\Api\V1\Admin\FileController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/admin')->group(function () {
    Route::group(['middleware' => ['jwt.auth', 'role:admin']], function () {
        Route::controller(FileController::class)->group(function () {
            Route::get('files', 'listAllFiles');
            Route::get('files/{id}', 'showFile');
            Route::post('files', 'uploadFile');
            Route::put('files/{id}', 'updateFile');
            Route::delete('files/{id}', 'deleteFile');
        });
    });
});
