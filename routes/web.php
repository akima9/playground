<?php

use App\Http\Controllers\Singingroom;
use App\Http\Controllers\SingingroomController;
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
    // return view('welcome');
    // return view('index');
    return redirect()->route('singingrooms.index');
});

Route::controller(SingingroomController::class)->group(function () {
    Route::get('/singingrooms', 'index')->name('singingrooms.index');
    Route::get('/singingrooms/{id}', 'show')->name('singingrooms.show');
});

Route::prefix('admin')->group(function () {
    Route::controller(SingingroomController::class)->group(function () {
        Route::get('/singingrooms/create', 'create')->name('singingrooms.create');
        Route::post('/singingrooms', 'store')->name('singingrooms.store');
    });
});
