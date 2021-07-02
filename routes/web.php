<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SearchController;

Route::get('/', [PageController::class, 'home'])->name('home');

// Route::get('/', [VacancyController::class, 'vacancy'])->name('vacancy');

Route::get('vacante/{vacancy:id}', [pageController::class, 'vacancy'])->name('vacancy');
Route::resource('users', UserController::class)->except('show')->names('admin.users');
Route::get('search/vacante', [SearchController::class, 'vacante'])->name('search.vacante');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:sanctum', 'verified'])->name('dashboard');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::get('vacante',[VacanciesController::class, 'vacancies'])->name('course');

Route::resource('vacancies', VacanciesController::class)->except('show')->names('admin.vacancies');
