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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::view('/','Welcome');
Route::view('/register','register'); 

Route::get('insert','studentcontroller@insertform');
Route::post('create','studentcontroller@insert');
Route::get('/test', ['as'=>'testing',function() {
  return view('test2',['name'=> 'Virat Gandhi']);
}]);

Route::get('redirect',function() {
  return redirect()->route('testing');
});

Route::get('/form',function() {
  return view('form');
});