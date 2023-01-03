<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=>'category'], function(){
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/create',[CategoryController::class, 'create']);
    Route::post('store',[App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
});
// Route::get('/category/create', [CategoryController::class, 'create']);

// Route::resource('/category', [CategoryController::class, 'create']);
