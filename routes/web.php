<?php

use Illuminate\Support\Facades\Route;
use App\Student;
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
    return view('welcome');
});

Route::get('/form', 'StudentController@createStudentForm');

Route::post('/form', 'StudentController@StudentForm');

Route::get('/read', 'StudentController@read');

Route::get('/update', function(){
    $student = Student::find(2);
    $student->whereId(2)->update(['email'=>'example@gmail.com']);
});

Route::get('/delete', function(){
    $student = Student::find(2);
    $student->whereId(2)->delete();
});