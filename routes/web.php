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
  $comics = config('comics');
  return view('home', ["comics" => $comics]);
});

Route::get('/characters', function () {
  $comics = config('comics');
  return view('links/characters', ["comics" => $comics]);
});

Route::get('/comics', function () {
  $comics = config('comics');
  return view('links/comics', ["comics" => $comics]);
});

Route::get('/movies', function () {
  $comics = config('comics');
  return view('links/movies', ["comics" => $comics]);
});

Route::get('/tv', function () {
  $comics = config('comics');
  return view('links/tv', ["comics" => $comics]);
});

Route::get('/games', function () {
  $comics = config('comics');
  return view('links/games', ["comics" => $comics]);
});

Route::get('/collectibles', function () {
  $comics = config('comics');
  return view('links/collectibles', ["comics" => $comics]);
});

Route::get('/videos', function () {
  $comics = config('comics');
  return view('links/videos', ["comics" => $comics]);
});

Route::get('/fans', function () {
  $comics = config('comics');
  return view('links/fans', ["comics" => $comics]);
});

Route::get('/news', function () {
  $comics = config('comics');
  return view('links/news', ["comics" => $comics]);
});

Route::get('/shop', function () {
  $comics = config('comics');
  return view('links/shop', ["comics" => $comics]);
});