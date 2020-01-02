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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/peanut', function(){
    return view('peanut');
});
Route::get('/product/create', 'ProductController@create')->name('product.add');
Route::get('/contact', function(){
    return 'Contact!';
});
Route::get('/dit/is/een/lange-url/zeg', 'PageController@longUrl');
Route::redirect('/dit/is/een/lange-url/zeg', '/korte-url');