<?php

use Illuminate\Support\Facades\Route;

$posts = [
    ['title' =>'First post'],
    ['title' =>'Second post'],
    ['title' =>'Third post'],
    ['title' =>'Fourth post'],
];



 //se puede usar view para reemplazar get, si las rutas son solo informativas
Route::view('/', 'welcome')->name('home');//las rutas siempre deben de estar referenciadas con nombre
Route::view('/about', 'about')->name('about');
Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/pruebas', 'pruebas')->name('pruebas');


