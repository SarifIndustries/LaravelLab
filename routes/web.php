<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecurityController;


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
    return view('welcome');
});

Route::get('/palisade', function () {
    return view('palisade');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [SecurityController::class, 'register']);
