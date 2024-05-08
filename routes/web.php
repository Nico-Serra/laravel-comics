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

    $message = "Welcome to the HomePage of the DC site's";

    return view('home', compact('message'));
})->name('home');

Route::get('/login', function () {

  

    return view('login');
})->name('login');

Route::get('/comics', function () {

    $comics = config('db.comics');
    //dd($comics);

    


    return view('comics', compact('comics'));
})->name('comics');

Route::get('/comics/{id}', function ($id) {

    abort_unless($id >= 0 && $id < count(config('db.comics')), 404);
    //dd($comics);

    $comic = config('db.comics')[$id];
    //$firstComic = $comics['0'];
    //dd($firstComic);

    


    return view('comic', compact('comic'));
})->name('comic');
