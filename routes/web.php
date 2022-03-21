<?php

use App\Http\Controllers\CarehomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
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

Route::get('/', function () {
    return view('webpages.welcome');
})->name('/');

Route::middleware(['auth:sanctum', 'verified'])
    ->controller(ChartController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });



    Route::group( ['middleware' => 'auth'], function(){
        Route::resource('carehomes',CarehomeController::class)->parameters(['' => 'webpages']);
        Route::resource('users',UserController::class)->parameters(['' => 'webpages']);
    });


