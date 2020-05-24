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
    return view('index');
});
Route::get('/agenda', function () {
    return view('agenda');
});
Route::get('/don', function () {
    return view('don');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/saalih', function () {
    return view('saalih');
});
Route::get('/equipes', function () {
    return view('equipes');

});
Route::get('/partenaires', function () {
    return view('partenaires');

});
Route::get('/mediatheque', function () {
    return view('mediatheque');

});
Route::get('/daara&metier', function () {
    return view('daara&metier');

});

