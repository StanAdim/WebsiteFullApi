<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\LeaderController;
use Illuminate\Support\Facades\Route;
/*
|---------------------------------------------
| API Routes
|---------------------------------------------
*/
// Route::middleware('auth:sanctum')
//     ->get('/user', function (Request $request){
//     return $request->user();
// });
Route::get('/access-message', function (){return response(['message'=>'Access denied']);})->name('login');
Route::post('/auth/register-user',[AuthUserController::class,'registerUser']);
Route::post('/auth/login',[AuthUserController::class,'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    // Your protected routes go here
    Route::resource('/auth/blog-post',BlogPostController::class);
    Route::resource('/auth/medium-banner',BannerController::class);
    Route::resource('/auth/commission-leader',LeaderController::class);
    Route::resource('/auth/medium-feature',FeatureController::class);

    //log user out
    Route::post('/auth/logout',[AuthUserController::class,'logout']);
    
});
