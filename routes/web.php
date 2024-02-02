<?php

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Guest\MovieController as GuestMovieController;
 use App\Http\Controllers\Guest\NewsController as GuestNewsController;


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
    return view('pages.home');
});


Route::get('/movies', [GuestMovieController::class, 'index']);
Route::get('/news', [GuestNewsController::class, 'index']);
