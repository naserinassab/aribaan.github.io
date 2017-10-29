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
Route ::get('/','controllasal@asalhome')->name("/");

Route ::get('master','controllmaster@master')->name("master");

Route ::get('test','controllmaster@testmaster')->name("test");

Route ::get('tabliq','controllmaster@tabliq')->name("tabliq");

Route ::get('khavasasal','controllmaster@khavasasal')->name("khavasasal");

Route ::get('shop','controllmaster@shop')->name("shop");

Route ::get('shop1','controllmaster@shop1')->name("shop1");

Route ::get('moarefi','controllmaster@moarefi')->name("moarefi");

Route ::get('darbare','controllmaster@darbarema')->name("darbare");

Route ::get('select','controllmaster@selectshop')->name("select");


//
//Route::get('/b', function () {
//    return view('test-master');
//});