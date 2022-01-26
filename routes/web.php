<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'home,);

//Route::get('contoh', function (){$name = "Angger";return view('contoh', ['name' => $name]);});

//Memanggil CSS dengan Asset
//Route::get('/', fn () => 'home');



//tutorial //
Route::get('/', function(){$name = "Angger cakra";
    return view('home', ['name' => $name]);});

Route::view('contact', 'contact');

Route::view('about', 'about');

Route::view('profile', 'profile');
