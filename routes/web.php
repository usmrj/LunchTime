<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\School;
use App\Models\Student;

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
    return view('stats');
})->middleware('auth');

Route::post('login', [LoginController::class, 'login'])->name('auth.login');

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');
