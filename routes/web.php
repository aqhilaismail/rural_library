<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route for all resource controllers

Route::middleware(['auth'])->group(function () {
    Route::resource('/supervisor', SupervisorController::class);
    Route::resource('/volunteer', VolunteerController::class);
    Route::resource('/member', MemberController::class);
    Route::resource('/book', BookController::class);
    Route::resource('/loan', LoanController::class);
    Route::resource('/loan', LoanController::class);
    Route::get('/search', [LoanController::class, 'search'])->name ('loan.search');
    Route::get('/search/book', [BookController::class, 'search'])->name ('book.search');
    //Route::get('/search/book', [BookController::class, 'search'])->name ('book.search');
});

