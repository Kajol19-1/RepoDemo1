<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\DemoProductController;

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

Route::get('/product',[productController::class, 'createProduct']);
Route::post('/product', [productController::class, 'submitProduct']);
Route::get('/demoproduct',[DemoProductController::class, 'demoproduct']);
Route::post('/demoproduct',[DemoProductController::class, 'submitdemoproduct']);

