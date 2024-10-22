<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/comics', function () {

    $comics = config("comics");

    return view('pages.comics' , compact("comics"));

})->name('comics');


Route::get('/manga', function () {

    $manga = config("mangas.manga");

    return view('pages.manga' , compact("manga"));

})->name('manga');
