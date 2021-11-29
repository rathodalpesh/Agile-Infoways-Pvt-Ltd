<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/applications/home', [App\Http\Controllers\HomeController::class, 'applicationsHome'])->name('applications.home');
Route::get('/applications/list', [App\Http\Controllers\HomeController::class, 'list'])->name('applications.list');

Route::get('/applications/show/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('applications.show');

Route::get('/applications/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('applications.edit');

Route::post('/applications/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('applications.update');

Route::get('/applications/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('applications.delete');

Route::get('/job_applications', [App\Http\Controllers\JobApplicationController::class, 'index'])->name('job_applications');
Route::post('/job_applications/store', [App\Http\Controllers\JobApplicationController::class, 'store'])->name('job_applications.store');
