<?php

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
    $school = School::where('id', 1)->first();
    $student = Student::where('id', 1)->first();
    return view('welcome', [
        'school' => $school,
        'classes' => $school->classes,
        'student' => $student
    ]);
});
