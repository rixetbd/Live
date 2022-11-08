<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Models\Country;
use App\Models\ServiceName;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Auth::routes();
Auth::routes(['register' => false]);
// Auth::routes(['register' => true]);

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
