<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\BuildingController;

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

Route::get('/my_page', [MyPlaceController::class, 'index']);

Route::get('/buildings', [BuildingController::class, 'index'])->name('buildings.index');


