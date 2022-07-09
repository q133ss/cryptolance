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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

Route::get('/how-it-works', function () {
    return view('how');
})->name('how.it.works');

Route::get('/projects',[\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

Auth::routes();

Route::prefix('account')->middleware('auth')->name('customer.')->group(function(){
    Route::get('/', function (){
        return 'account';
    })->name('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
