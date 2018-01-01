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
    return redirect('/index');
});

Route::get('/databrick_1/result', 'MapController@dataBrick1');
Route::get('/databrick_2/result', 'MapController@dataBrick2');
Route::get('/databrick_3/result', 'MapController@dataBrick3');

Route::get('/spark_1/result', 'MapController@spark1');
Route::get('/spark_2/result', 'MapController@spark2');
Route::get('/spark_3/result', 'MapController@spark3');

Route::get('/compare/result', 'MapController@compare');

Route::get('/index', function () {
    return view('index');
});

Route::get('/spark_1', function () {
    return view('spark_1');
});

Route::get('/spark_2', function () {
    return view('spark_2');
});
Route::get('/spark_3', function () {
    return view('spark_3');
});

Route::get('/k_9', function () {
    return view('k_9');
});
Route::get('/k_9/map_final', function () {
    return view('map_final');
});
Route::get('/k_20', function () {
    return view('k_20');
});