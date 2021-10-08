<?php

use App\Http\Controllers\HomeController;
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

Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/products/{id}', [HomeController::class, 'show']);
Route::get('/products/{id}/edit', [HomeController::class, 'edit']);
Route::put('/edit/{id}', [HomeController::class, 'update']);
Route::delete('/product/{id}', [HomeController::class, 'destroy'])->name('destroy');

Route::get('/home', 'HomeController@index')->name('home');
