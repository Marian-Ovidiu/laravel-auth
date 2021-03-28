<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubblicController;

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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('brand', 'PubblicController@index')->name('public.brand.index'); // index
Route::get('brand/{brand}', 'PubblicController@show')->name('public.brand.show');  //show

// Route::resource('auto', AutoController::class)->middleware('auth');
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource('brand', ControllerBrand::class);
    });
