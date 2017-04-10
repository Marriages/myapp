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
/*
Route::get('/', function () {
    return '<h1>Hello World!</h1>';
});*/
/*
Route::get('/{foo?}', function ($foo = 'Hello Java') {
    return $foo;
})->where('foo', '[0-9a-zA-Z]{3}');


Route::get('/', ['as' => 'home', function () {
    return 'My Name Is Kang Dea Sung';
}]);*/
/*
route::get('/home',function() {
    return redirect(route('home'));
});

Route::get('/',function(){
    return view('error.503');
});

*/

ROute::get('/',function()
{
    return view('welcome')->with('name','foo');
});