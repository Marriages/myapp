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
    $items=['apple','banana','potato'];
    return view('welcome')->with( [
        'name'=>'foo',  'greeting' =>'hello??','items'=>'$items'
    ]);

});