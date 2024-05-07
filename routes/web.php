<?php

use Faker\Guesser\Name;
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

Route::get('/', function () {

    $comics = config('db.comics');
    //dd($comics);

    


    return view('home', compact('comics'));
})->name('home');

Route::get('/firstComic', function () {

    $comics = config('db.comics');
    //dd($comics);

    $firstComic = $comics['0'];
    //dd($firstComic);

    


    return view('first', compact('firstComic'));
})->name('first');

Route::get('/lastComic', function () {

    $comics = config('db.comics');
    //dd($comics);

    $lastComic = $comics['11'];
    //dd($lastComic);

    


    return view('last', compact('lastComic'));
})->name('last');