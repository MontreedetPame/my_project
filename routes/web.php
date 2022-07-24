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

Route::get('/about', function () {
    echo "<h1>เกี่ยวกับเรา</h1>";
});

Route::get('/users/{name}', function ($name) {
    echo "<h1>เกี่ยวกับเรา $name</h1>";
});

Route::get('/product/{name}/{price}', function ($name, $price) {
    echo "<h1>ชื่อ : $name</h1>";
    echo "<h1>ราคา : $price</h1>";
});
