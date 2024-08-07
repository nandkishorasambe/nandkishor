<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;




Route::group([
    'middleware'=>['guest']
],function(){
Route::get('register',[RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register',[RegisterController::class, 'register'])->name('register');


Route::get('login', [RegisterController::class, 'login'])->name('login');
Route::post('login', [RegisterController::class, 'login'])->name('login');



Route::get('/', function () {
    return view('index');
    // echo auth()->student()->id;

    // echo 'hello';
    return;
});

});



Route::group([
    'middleware'=>['auth']
],function(){

Route::get('java_enroll', [DashboardController::class, 'java_enroll'])->name('java_enroll');  
Route::get('data_science_enroll', [DashboardController::class, 'data_science_enroll'])->name('data_science_enroll');  
Route::get('Machine_learning_enroll', [DashboardController::class, 'Machine_learning_enroll'])->name('Machine_learning_enroll');  

Route::get('dashboard', [RegisterController::class, 'dashboard'])->name('dashboard');

Route::get('dashboard/course', [DashboardController::class, 'course'])->name('course');

Route::get('dashboard/profile', [RegisterController::class, 'showProfile'])->name('profile');
Route::post('dashboard/profile', [RegisterController::class, 'updateProfile'])->name('profile.update');

Route::get('logout',[RegisterController::class,'logout'])->name('logout');



});