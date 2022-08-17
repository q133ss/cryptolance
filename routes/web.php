<?php

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
Auth::routes();
Route::middleware('last.active')->group(function(){
    Route::get('/how-it-works', function () {
        return view('how');
    })->name('how.it.works');

    Route::get('/projects',[\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
    Route::get('/project/{id}', [\App\Http\Controllers\ProjectController::class, 'single'])->name('projects.single');

    Route::prefix('account')->middleware('auth')->name('account.')->group(function(){
        Route::get('/', [\App\Http\Controllers\AccountController::class, 'index'])->middleware('account.create')->name('index');
        Route::get('/settings', [\App\Http\Controllers\AccountController::class, 'settings'])->name('settings');
        Route::get('/logout', [\App\Http\Controllers\AccountController::class, 'logout'])->name('logout');
        Route::post('/save', [\App\Http\Controllers\AccountController::class, 'save'])->name('save');
    });
});
Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
