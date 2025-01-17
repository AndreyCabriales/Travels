<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

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
    return view('index');
}) -> name ("index");

Route::resource('/travels',App\Http\Controllers\TravelController::class);

Route::get('/products/{product}/delete',
[App\Http\Controllers\TravelController::class, 'delete'])-> name('products.delete');

Route::resource('/origins',App\Http\Controllers\OriginController::class);

Route::resource('/destinations',App\Http\Controllers\DestinationController::class);

Route::resource('/clients',App\Http\Controllers\ClientController::class);

Route::resource('/sales',App\Http\Controllers\SaleController::class);
