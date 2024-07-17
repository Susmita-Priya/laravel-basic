<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Php;
use App\Http\Controllers\FormController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
})->name('about.ab');

Route::get('/', function () {
    return view('subdir.home');
});

Route::get('/loop' ,function() {
    return view('subdir.loop');
});

Route::get('customer', 'App\Http\Controllers\MyController@list');

Route::get('register', [FormController::class,'registerget'])->name("register.r");

Route::post('register', [FormController::class,'store']);

Route::get('login', [FormController::class,'loginget']);

Route::get('delete/{id}', [FormController::class,'destroy'])->name("customer.del");

Route::get('edit/{id}', [FormController::class,'update'])->name("customer.edit");

Route::post('login', [FormController::class,'loginpost']);
