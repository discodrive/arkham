<?php

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

Route::get('/', 'pagesController@front');
Route::get('/decks/investigator', 'pagesController@investigators');

Route::resource('cards', 'CardsController');
Route::resource('decks', 'DecksController');
