<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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
    //return view('welcome');
    //return "NBS";
    #return rand(0, 99) + rand(0, 99);
    foreach (Student::all() as $student){
        echo $student;
    }
});

Route::resource('student', StudentController::class)
    ->only(['index']);
