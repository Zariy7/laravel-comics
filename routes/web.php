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
    $data = [
        'menu' => $menu = config('menu'),
        'dcComics' => $dcComics = config('dccomics'),
        'dcCompany' => $dcCompany = config('dccompany'),
        'shop' => $shop = config('shop'),
        'sites' => $sites = config('sites'),
        'comics' => $comics = config('comics'),
    ];

    //dd($data);
    
    return view('homepage', $data);
});
