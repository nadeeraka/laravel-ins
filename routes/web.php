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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('about', function () {
//     return view('about');
// });
// Route::get('contact', function () {
//     return view('contact');
// });
Route::view('/', 'welcome');
Route::view('about', ' about ');
Route::view('contact', 'contact');

Route::get('shop', function () {
    $items = [
        'rice with meet',
        'rice with vagitabals',
        'rice with fish',
        'fry rice chines',
        'egg parata',
        'kothhu'
    ];
    return view('api.shop', ['items' => $items]);
});
// also can use /
// Route::get('shop', function () {
//     return view('api/shop');
// });


Auth::routes();

Route::get(' / home ', ' HomeController @index ')->name(' home');
