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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('/admin/users','Admin\UserConntroller',['except'=>'show','create','store']);
//Route::namespace('Admin')->$group = prefix('admin')->name('admin.')->group(function(){
//    
//});
Route::group( ['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

  Route::resource('/users','UserConntroller',['except'=>['show','create','store']]);

}); 