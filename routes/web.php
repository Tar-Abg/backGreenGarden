<?php

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

Route::get('/admin_product', function () {
    return view('home');
});

Route::get('/caxikner', function () {
    return view('caxikner');
});

Route::get('/getAll', function () {
    return \App\Products::all();
});

Route::post('/add_product', 'Controller@add_product');
Route::post('/delete_product', 'Controller@delete_product');
