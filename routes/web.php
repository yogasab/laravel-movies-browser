<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TVShowController;
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

Route::get('/', [MoviesController::class, 'index'])->name('home');
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/movies/{movies}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/tv', [TVShowController::class, 'index'])->name('tvshow');
Route::get('/tv/{tv}', [TVShowController::class, 'show'])->name('tvshow.show');
Route::get('/actors', [ActorsController::class, 'index'])->name('actors');
Route::get('/actors/show/{actor}', [ActorsController::class, 'show'])->name('actors.show');
Route::get('/actors/page/{page}', [ActorsController::class, 'index'])->name('actors.page');
Route::get('/actors/{actors}', [ActorsController::class, 'show']);
