<?php

use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlateController as AdminPlateController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/register',[RegisterController::class, 'showRegistrationForm'])->name('register');

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

Route::middleware('auth')->controller(OrderController::class)->prefix('/admin')->name('admin.')->group(function(){
    route::get('/orders', "index")->name('orders.index');
    route::get('/orders/stat', 'stat')->name('orders.stat');
    route::get('/orders/{order}', 'show')->name('orders.show');
});


//  Route per il progetto in Vue

Route::get('/app', [RestaurantController::class, 'redirectToVue'])->name('app.redirect');