<?php

use App\Http\Controllers\DishController;
use App\Http\Controllers\LoginController;
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

Route::post('login', [LoginController::class, 'login'])->name('auth.login');

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');

//  =========================== Dish Managment ===================================

Route::post('add-dish', [DishController::class, 'create'])->name('add-dish')->middleware('auth');

Route::get('add-dish', [DishController::class, 'index'])->name('add-dish')->middleware('auth');

Route::post('modify-dish', [DishController::class, 'edit'])->name('modify-dish')->middleware('auth');

Route::get('modify-dish', [DishController::class, 'indexEdit'])->name('modify-dish')->middleware('auth');

Route::get('/refunds/done', function () {
    return view('ProcessedRefunds');
});
Route::get('/refunds/wait', function () {
    return view('WaitingRefunds');
});
Route::get('/mod', function () {
    return view('ModifyMenu');
});

