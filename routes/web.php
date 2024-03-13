<?php

use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;

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
    return 'aaaaa';
});

Route::get('/my_page', [MyPlaceController::class, 'index']);
//Route::get('/my_page', 'App\Http\Controllers\MyPlaceController@index'); можно так


