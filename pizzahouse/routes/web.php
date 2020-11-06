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
    return view('welcome');
});

Route::get('/home', function () {
    $pizza = [
        'base' => 'cheesy crust'
    ];
    $pizza2 = [
        ['type' => 'A', 'catog' => 'Sugar'],
        ['type' => 'B', 'catog' => 'Lime'],
        ['type' => 'C', 'catog' => 'Salt'],
    ];
    return view('home',$pizza, ['pizza2' => $pizza2]);
});

Route::get('/details/{id}', function ($id) {
    return view('details', ['id' => $id]);
});
