<?php

use Illuminate\Support\Facades\Route;

// rotte autenticazione
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// rotte pagina
Route::get('/', 'GuestController@home')->name('home');

// rotte veu
Route::get('/api/events/list', 'ApiController@getEvents')->name('api.events.list');
