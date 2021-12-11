<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Livewire\ProductDetails;

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

Route::namespace('Site')->group(function () {
    Route::get('/', 'HomeController')->name('site.home');

    Route::get('produtos', 'ProductsController@index')->name('site.products');

    //Route::delete('/apagar/{id}', 'ProductsController@destroy')->name('site.apagar');
});

