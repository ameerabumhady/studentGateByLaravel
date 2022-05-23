<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('login', [Controller::class, 'login']);

Route::get('displayStudents', [Controller::class, 'getStudents']);
Route::get('addStudent', [Controller::class, 'setStudents']);
Route::get('{id}/{firstname}/{lastname}/{email}/{collegname}/editStudent', [Controller::class, 'editStudent']);
Route::get('studentGrades', [Controller::class, 'getStudentGrades']);

Route::get('displayCourses', [Controller::class, 'getCourses']);
Route::get('addCourse', [Controller::class, 'setCourses']);

Route::get('displayColleges', [Controller::class, 'getColleges']);
Route::get('addCollege', [Controller::class, 'setColleges']);



