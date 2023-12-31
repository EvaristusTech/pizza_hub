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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {

    $pizzas = [
    ['head' => 'Diamond', 'body' => 'pizza'],
    ['head' => 'chizzy', 'body' => 'sharwama'],
    ['head' => 'chopping', 'body' => 'doughnuts'],
    ['head' => 'uncle ruben', 'body' => 'fish']
    ];
    return view('pizza', ['pizza' => $pizzas]);
});

Route::get('/pizza/{id}', function ($id) {
    return view('details', ['id' => $id]);
});