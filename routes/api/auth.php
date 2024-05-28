<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('register', 'register');
        Route::group(['middleware' => ['jwt.auth']], function () {
            Route::post('logout', 'logout');
            Route::post('refresh-token', 'refreshToken');
        });
    });
});
