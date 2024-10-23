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

Route::get('/comics/{index}' ,function (string $index){

            $comics = config("comics");
            if(isset($comics[$index])){
            $comic = $comics[$index];
            return view('comics.comics_show' , compact("comic"));
        } else {
            abort(404);
        }
})->name('comics_show');



Route::get('/manga/{index}' ,function (string $index){

    $manga = config("mangas.manga");
    if(isset($manga[$index])){
    $item = $manga[$index];
    return view('comics.manga_show' , compact("item"));
} else {
    abort(404);
}
})->name('manga_show');


