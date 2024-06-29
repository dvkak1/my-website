<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// });

// Route::get('/second', function(){
//   return view('second');
// });

Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

//Routes can also be coded as 
//Route::view('/second', 'second');