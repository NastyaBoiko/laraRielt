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

Route::get('/buildings', [BuildingController::class, 'index'])->name('building.index');
Route::get('/buildings/create', [BuildingController::class, 'create'])->name('building.create');
Route::post('/buildings/store', [BuildingController::class, 'store'])->name('building.store');
Route::get('/buildings/{building}', [BuildingController::class, 'show'])->name('building.show');
Route::get('/buildings/{building}/edit', [BuildingController::class, 'edit'])->name('building.edit');
Route::patch('/buildings/{building}', [BuildingController::class, 'update'])->name('building.update');
Route::delete('/buildings/{building}', [BuildingController::class, 'destroy'])->name('building.delete');


