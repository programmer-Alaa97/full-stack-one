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

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::resource('products', 'ItemController');

    Route::resource('categories', 'CategoryController');
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    // route user front end
    Route::get('/', 'websitController@index')->name('index');
    Route::get('/category/{id}', 'websitController@category')->name('category.show');
