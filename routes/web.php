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
    return view('index');
});

// Route::get('/singingrooms/{id}', function ($id) {
//     return 'Singingroom ' . $id;
// });

Route::controller(SingingroomController::class)->group(function () {
    Route::get('/singingrooms/{id}', 'show');
});
