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

Route::get('/me1', function(){
    $pogi = ["contestant1" =>
                ["name" => 'Nor Daniel', "age" => "22"],
            "contestant2" => 
                ["name" => 'Daddy Jeff', 'age' => '23'],
            "contestant3" => 
                ["name" => 'Lino idol', 'age' => 'secret']
            ];

    return view('page.me1', ['pogis' => $pogi]);
});

Route::get('/me', 'AboutMeController@me')->name('me');
Route::get('/hometown', 'AboutMeController@home_town')->name('hometown');
Route::get('/fav', 'AboutMeController@fav')->name('fav');
