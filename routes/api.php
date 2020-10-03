<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\MainController;
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

    Route::middleware('admin')->namespace('Admin')->group(function () {
        Route::get('logs', [LogsController::class, 'index']);
        Route::get('user', [AdminController::class, 'index']);
        Route::post('user/store', [AdminController::class, 'store']);
        Route::put('user/update/{id}', [AdminController::class, 'update'])->where('id', '[0-9]+');
        Route::delete('user/delete/{id}', [AdminController::class, 'destroy'])->where('id', '[0-9]+');
        Route::get('user/{id}', [AdminController::class, 'show'])->where('id', '[0-9]+');
    });

    Route::get('user/me', [AuthController::class, 'me']);
    Route::put('user/update', [UserController::class, 'update']);
    Route::post('auth/logout', [AuthController::class, 'logout']);
});

