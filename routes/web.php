<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;

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

Route::get('/home', [App\Http\Controllers\CategoryController::class, 'index'])->name('home');



Route::group(['prefix'=>'category'], function(){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('store',[App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('update/{id}',[CategoryController::class, 'edit']);
    Route::put('update/{id}',[CategoryController::class, 'update'])->name('category.edit');
    // Route::get('delete',[CategoryController::class, 'index']);
    Route::delete('delete/{id}',[CategoryController::class, 'destroy'])->name('category.delete');
});
// Route::get('/category/create', [CategoryController::class, 'create']);

// Route::resource('category', [CategoryController::class]);


// start of route for food 
Route::group(['prefix'=>'food'],function(){
    Route::get('/',[FoodController::class, 'index'])->name('food.index');
    Route::get('create',[FoodController::class, 'create'])->name('food.create');
    Route::post('store', [FoodController::class, 'store'])->name('food.store');
    Route::get('update/{id}', [FoodController::class, 'edit']);
    Route::put('update/{id}',[FoodController::class, 'update'])->name('food.edit');
    Route::delete('delete/{id}', [FoodController::class, 'destroy'])->name('food.delete');
    
});




