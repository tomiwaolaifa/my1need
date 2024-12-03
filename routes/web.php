<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\WaitlistController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\HomeController;


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

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('log_out');
Route::get('/create-purpose', [PurposeController::class, 'create'])->name('create-purpose');
Route::get('/waitlist', [WaitlistController::class, 'join'])->name('waitlist');
Route::post('/join-waitlist', [WaitlistController::class, 'join_waitlist'])->name('join-waitlist');
Route::get('/create-offers', [PurposeController::class, 'create_offers'])->name('create-offers');
Route::post('/search-needs', [PurposeController::class, 'search_needs'])->name('search-needs');
Route::get('/create-solutions', [SolutionController::class, 'solutions'])->name('create-solutions');
Route::get('/solve_need/{id}', [SolutionController::class, 'solve_need'])->name('solve_need');
Route::get('/offers_solve_need/{id}', [SolutionController::class, 'offers_solve_need'])->name('offers_solve_need');
Route::post('/store-purpose', [PurposeController::class, 'store'])->name('store-purpose');
// Route::post('/store-solution', [SolutionController::class, 'solutions_store'])->name('solutions_store');
Route::post('/store-solution/{id}', [SolutionController::class, 'solutions_store'])->name('solutions_store');
Route::post('/stay-anon/{id}', [SolutionController::class, 'stay_anon'])->name('stay_anon');
Route::get('/needs_confirm', [PurposeController::class, 'needs_confirm'])->name('needs_confirm');
Route::get('/waitlist_confirm', [WaitlistController::class, 'waitlist_confirm'])->name('waitlist_confirm');
Route::get('/solution_confirm/{id}', [SolutionController::class, 'solution_confirm'])->name('solution_confirm');
Route::get('/offers_confirm/{id}', [SolutionController::class, 'offers_confirm'])->name('offers_confirm');
Route::get('/', [HomeController::class, 'landing_page'])->name('landing_page');



// For authenticated users
Route::middleware(['auth'])->group(function () {
    // For authenticated admin users
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
    });

    // For authenticated non-admin users
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// Redirect root URL based on user role
Route::get('/admin', function () {
    return auth()->check() ? (auth()->user()->hasRole('admin') ? redirect()->route('dashboard') : redirect()->route('home')) : redirect()->route('login');
});
