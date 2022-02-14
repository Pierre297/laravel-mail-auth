<?php

use Illuminate\Support\Facades\Route;

// rotte autenticazione
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// rotte pagina
Route::get('/', 'GuestController@home')->name('home');

// rotte veu
Route::get('/api/videogames/list', 'ApiController@getVideogames')->name('api.videogames.list');
Route::get('/api/videogame/delete/{id}', 'ApiController@deleteVideogame')->name('api.videogame.delete');
