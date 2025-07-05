<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\signUpController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/index', view:'home.index');

Route::get('/signup', [signUpController::class,'create'])->name('signup');
Route::get('/login', [loginController::class, 'login'])->name('login');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
