<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\LogsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'authorized'], function () {

        Route::group(['middleware' => 'admin'], function () {
            Route::get('logs', [LogsController::class, 'index']);
            Route::get('users', [AdminController::class, 'index']);
            Route::post('user/store', [AdminController::class, 'store']);
            Route::delete('user/delete/{id}', [AdminController::class, 'destroy']);
            Route::put('user/update/{id}', [AdminController::class, 'update']);
        });

        Route::group(['middleware' => 'client'], function () {
            Route::get('user', [UserController::class, 'show']);
            Route::put('user/update', [UserController::class, 'update']);
        });

    Route::get('user/show/{id}', [AdminController::class, 'show']);
    Route::post('auth/logout', [AuthController::class, 'logout']);
});

