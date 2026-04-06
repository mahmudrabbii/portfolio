<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QueryController;



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
Route::get('/', [DashboardController::class, 'forPortfolio'])->name('home');

Route::get('/about', function () {
	return view('pages.about');
})->name('about');

Route::get('/dashboard', [DashboardController::class, 'forDashboard'])->name('dashboard');

Route::get('/skills', function () {
	return view('pages.skills');
})->name('skills');

Route::get('/projects', function () {
	return view('pages.projects');
})->name('projects');

Route::get('/education', function () {
	return view('pages.education');
})->name('education');

Route::get('/query', function () {
	return view('pages.query');
})->name('query');

Route::get('/contact', function () {
	return view('pages.contact');
})->name('contact');

Route::post('/query-send', [QueryController::class, 'mailSend'])->name('query.send'); 