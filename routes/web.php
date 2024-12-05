<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlateController as AdminPlateController;
use App\Http\Controllers\Admin\RestaurantController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::middleware('auth')->controller(AdminPlateController::class)->prefix('/admin')->name('admin.')->group(function(){
    route::get('/plates','index')->name('plates.index');
    route::get('/plates/create','create')->name('plates.create');
    route::post('/plates','store')->name('plates.store');
    route::get('/plates/{plate}','show')->name('plates.show');
    route::get('/plates/{plate}/edit','edit')->name('plates.edit');
    route::put('/plates/{plate}','update')->name('plates.update');
    route::delete('/plates/{plate}','destroy')->name('plates.delete');

});
