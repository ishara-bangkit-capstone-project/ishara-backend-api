<?php

use App\Http\Controllers\Api\V1\User\DashboardController;
use App\Http\Controllers\Api\V1\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/user')->group(function () {
    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'profile');
            Route::put('profile', 'updateProfile');
        });

        Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
            Route::get('latest-stage', 'getLatestStage');
        });
    });
});
