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

Route::get('/logout', [PagesController::class, 'logout'])->name('logout');

Route::post('/login', [PagesController::class, 'profile_login'])->name('profile.login');

Route::get('/profile', [PagesController::class, 'profile_view'])->name('profile.view');

Route::get('/registration', [PagesController::class, 'register']);

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

Route::get('/student/get', [StudentController::class, 'get']);

Route::get('/student/details', [StudentController::class, 'details'])->name('student.details');

Route::post('/registration', [PagesController::class, 'registersubmit'])->name('student.register');

Route::get('/student/list', [StudentController::class, 'list'])->name('student.list')->middleware('authentication');

Route::get('/student/edit', [StudentController::class, 'edit'])->name('student.edit');

Route::post('/student/edit', [StudentController::class, 'update'])->name('student.update');

Route::get('/encrypt', [PagesController::class, 'encrypt'])->name('enc');

Route::post('/encryption', [PagesController::class, 'encryption'])->name('encs');
