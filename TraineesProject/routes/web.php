<?php

use App\Http\Controllers\MyCustomLogin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('home');
    })->middleware(['auth', 'verified'])->name('home');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::resource('users', UserController::class)->middleware('auth');

    Route::post('customlogin', [MyCustomLogin::class, 'login'])->name('customlogin');

    Route::get('send-email', function(){

        // Mail::to('izkiboy@gmail.com')->send(new WelcomeMail());

        return response('Email Has Been Sent');

    })->middleware('auth');

require __DIR__.'/auth.php';