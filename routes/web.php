<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Auth::routes();


Route::group(['prefix' => 'home', 'as' => 'Home.', 'middleware' => ['auth']], function () {
    Route::get('/Logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'admin', 'as' => 'Admin.', 'middleware' => ['auth']], function () {
    
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');

    Route::get('/Car', [App\Http\Controllers\Admin\CarController::class, 'index'])->name('car');
    Route::get('/CreateCar', [App\Http\Controllers\Admin\CarController::class, 'create'])->name('create_car');
    Route::post('/StoreCar', [App\Http\Controllers\Admin\CarController::class, 'store'])->name('store_car');
    Route::get('/EditCar', [App\Http\Controllers\Admin\CarController::class, 'edit'])->name('edit_car');
    Route::post('/UpdateCar', [App\Http\Controllers\Admin\CarController::class, 'update'])->name('update_car');
    Route::get('/DeleteCar', [App\Http\Controllers\Admin\CarController::class, 'delete'])->name('delete_car');

});

