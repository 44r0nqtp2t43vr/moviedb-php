<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieInfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieInfoController::class, "listMovies"])->name('movies');

Route::get('/movie/detail/{mov_id}', [MovieInfoController::class, "viewDetails"])->name('movie');
