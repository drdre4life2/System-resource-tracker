<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PruneController;


Route::post('welcome', [NodeController::class, 'index']);




Route::group(['middleware' => 'api'], function($router) {
    Route::group(['prefix' => 'Auth'], function () {
        Route::post('login', [UserController::class, 'login']);
        Route::post('logout', [UserController::class, 'logout']);
        Route::post('refresh-token', [UserController::class, 'refresh']);
    });

    Route::group(['prefix' => 'User'], function () {
        Route::post('register', [UserController::class, 'register']);
        Route::post('profile', [UserController::class, 'profile']);

    });


    Route::group(['prefix' => 'Node'], function () {
    Route::get('/', [NodeController::class, 'index']);
    Route::post('/create', [NodeController::class, 'create']);
    Route::get('/show/{node}', [NodeController::class, 'show']);
    Route::delete('/delete/{node}', [NodeController::class, 'delete']);
    Route::post('update/{node}', [NodeController::class, 'update']);
    });

    Route::get('prune', [PruneController::class, 'prune']);


});
