<?php

use App\MongoTest;
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
    $test = new MongoTest();
    $test->nombre = "PERRITO";
    $test->save();

    dd(MongoTest::all());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/client', 'ClientController@index')->middleware('auth');
