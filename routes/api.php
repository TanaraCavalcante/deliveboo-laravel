<?php

use App\Http\Controllers\Api\PlateController;
use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PlateController::class)->name('api.')->group(function(){
    Route::get('plates','index')->name('plates.index');
    Route::get('plates/{plate}','show')->name('plates.show');
});










Route::controller(RestaurantController::class)->name('api.')->group(function(){
    Route::get('restaurants','index')->name('restaurants.index');
    Route::get('restaurants/{restaurant}','show')->name('restaurants.show');
});
