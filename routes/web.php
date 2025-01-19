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

Route::get('/travels/{travel}/delete',
[App\Http\Controllers\TravelController::class, 'delete'])-> name('travels.delete');

Route::resource('/origins',App\Http\Controllers\OriginController::class);

Route::get('/origins/{origin}/delete',
[App\Http\Controllers\OriginController::class, 'delete'])-> name('origins.delete');

Route::resource('/destinations',App\Http\Controllers\DestinationController::class);

Route::get('/destinations/{destination}/delete',
[App\Http\Controllers\DestinationController::class, 'delete'])-> name('destinations.delete');

Route::resource('/clients',App\Http\Controllers\ClientController::class);

Route::get('/clients/{client}/delete',
[App\Http\Controllers\ClientController::class, 'delete'])-> name('clients.delete');

Route::resource('/sales',App\Http\Controllers\SaleController::class);

Route::get('/sales/{sale}/delete',
[App\Http\Controllers\SaleController::class, 'delete'])-> name('sales.delete');