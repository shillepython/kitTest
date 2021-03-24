<?php

use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
use App\Http\Controllers\MarkController;
use Illuminate\Support\Facades\App;
use App\Http\Requests;
use Illuminate\Http\Request;

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
Route::redirect('/', '/ru');

Route::group(['prefix' => '{language}', 'where' => ['language' => 'ru|en']], function () {

    if (!in_array(\app()->getLocale(), ['en', 'ru'])) {
        dd('404');
    }
    //Route Home
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::middleware(['auth:sanctum', 'verified'])
        ->resource('/test', TestController::class)
        ->name('*', 'test');
    Route::post('/test/create-test', [TestController::class, 'store_test'])->name('store_test');


    Route::middleware(['auth:sanctum', 'verified'])
        ->get('/marks', [MarkController::class, 'index'])->name('marks');

    //Route News
    Route::middleware(['auth:sanctum', 'verified'])->get('/article', function () {
        return view('article');
    })->name('article');


    Route::group(['prefix' => 'adminpanel','middleware' => ['role:admin|teacher']], function () {
        Route::get('home', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-home');
        Route::get('settings', [\App\Http\Controllers\Admin\AdminController::class, 'settings'])->name('admin-settings');
        Route::get('create-test', [\App\Http\Controllers\Admin\AdminController::class, 'createTest'])->name('admin-create-test');
        Route::get('users', [\App\Http\Controllers\Admin\AdminController::class, 'users'])->name('admin-users');

        Route::get('group', [\App\Http\Controllers\Admin\AdminController::class, 'group'])->name('admin-groups');

        Route::resource('/group', \App\Http\Controllers\GroupRess::class)
            ->name('*', 'group');
        Route::post('/group/create-group', [\App\Http\Controllers\GroupRess::class, 'storeNewGroup'])->name('store-new-group');




        Route::post('/settings-edit', [\App\Http\Controllers\Admin\AdminController::class, 'sattingsEdit'])->name('admin-settings-edit');

    });

});

