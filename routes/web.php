<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
Route::get('/',[ItemController::class,'getAll'])->name('offers.all');
Route::group(['prefix' => 'offer'], function () {

        Route::get('create',[ItemController::class,'create'])->name('offers.create');
        Route::post('store',[ItemController::class,'store'])->name('offers.store');
});

Route::group(['prefix' => 'Categore'], function () {

        Route::get('create',[CategoryController::class,'create'])->name('Categore.create');
        Route::post('store',[CategoryController::class,'store'])->name('Categore.store');
});