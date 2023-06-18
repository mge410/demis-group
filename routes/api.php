<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'news'], function (){
    Route::get('/', \App\Http\Controllers\News\IndexController::class);
});

Route::group(['prefix' => 'feedback'], function (){
    Route::post('/store', \App\Http\Controllers\Feedback\StoreController::class);
});
