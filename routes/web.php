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
    return view('index');
});

Route::view('home','index');
Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('course-details', 'course-details');
Route::view('courses', 'courses');
Route::view('events', 'events');
Route::view('pricing', 'pricing');
Route::view('trainers', 'trainers');