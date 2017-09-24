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

// Homepage
Route::get('/', 'WelcomeController@show')->name('welcome');

// Single pages (no hierarchy)
Route::get('/archive', 'SingleController@archive')->name('single.archive');
Route::get('/ebooks', 'SingleController@ebooks')->name('single.ebooks');
Route::get('/about', 'SingleController@about')->name('single.about');

// Music
Route::get('/music', 'MusicController@landing')->name('music.landing');
Route::get('/music/all-tracks', 'MusicController@allTracks')->name('music.allTracks');
Route::get('/music/{albumId}', 'MusicController@album')->name('music.album');
Route::get('/music/{albumId}/track/{trackId}', 'MusicController@track')->name('music.track');

// Portfolio
Route::get('/portfolio', 'PortfolioController@landing')->name('portfolio.landing');
Route::get('/portfolio/{company}/{project}', 'PortfolioController@projectPage')->name('portfolio.projectPage');
