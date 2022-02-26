<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

Route::get('/login', [PagesController::class, 'login'])->name('login');

Route::get('/registration', [PagesController::class, 'register']);

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

Route::get('/student/get', [StudentController::class, 'get']);

Route::get('/student/details', [StudentController::class, 'details'])->name('student.details');

Route::post('/registration', [PagesController::class, 'registersubmit'])->name('anyname');

Route::get('/student/list', [StudentController::class, 'list'])->name('student.list');

Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
