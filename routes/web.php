<?php

use App\Http\Controllers\AshiController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/admin/mrfix/stock', 'StockMrfixesController@index')->name('stock');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function () {
    return view('backend/index');
});
Route::resource('/admin/mrfix','MrfixesController');
Route::resource('/admin/mrfix/stock','StockMrfixesController');
Route::resource('/admin/ashi','AshiController');