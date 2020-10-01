<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\AuthController;
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

Route::group(['middleware' => ['authorized']], function () {

        Route::get('user', [UserController::class, 'show']);
        Route::put('user/update/{id}', [UserController::class, 'update']);

        Route::get('admin/user', [AdminController::class, 'index']);
        Route::get('admin/user/show/{id}', [AdminController::class, 'show']);
        Route::put('admin/user/update/{id}', [AdminController::class, 'update']);
        Route::post('admin/user/store', [AdminController::class, 'store']);

    Route::post('auth/logout', [AuthController::class, 'logout']);
});

