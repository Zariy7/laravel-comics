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
    $comics = config('comics');

    //dd($data);
    
    return view('homepage', compact('comics'));
});

Route::get('/{param}', function($param) {
    $comics = config('comics');
    
    $focus = null;
    foreach($comics as $issue){
        if($issue['id'] == $param){
            $focus = $issue;
        }
    }

    //dd($focus);

    return view('home-detail', compact('focus', 'comics'));
})->name('home-detail');