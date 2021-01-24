<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
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

//Route Home
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//Route Test
Route::middleware(['auth:sanctum', 'verified'])
    ->resource('/test', TestController::class)
    ->name('*','test');

//Route News
Route::middleware(['auth:sanctum', 'verified'])->get('/article', function () {
    return view('article');
})->name('article');



