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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route ::get('/','controllasal@asalhome');

Route ::get('master','controllmaster@master');

Route ::get('test','controllmaster@testmaster');

Route ::get('tabliq','controllmaster@tabliq');
//
//Route::get('/b', function () {
//    return view('test-master');
//});