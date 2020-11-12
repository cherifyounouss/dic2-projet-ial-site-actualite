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
    return view('Layouts.adminlog');
});
Route::post('connect','ConnectController@index');
Route::get('userprofile', function () {
    return view('userprofile');
});
Route::get('adminprofile', function () {
    return view('adminprofile');
});
Route::post('adduser','ManageUserController@addUser');
Route::post('useredit','ManageUserController@editUser');
Route::get('deleteuser','ManageUserController@deleteUser');
Route::get('useredit', function () {
    return view('useredit');
});
Route::get('listusers','ManageUserController@index');
Route::get('adminmanagearticles', function () {
    return view('listarticles');
});
Route::get('addarticle', function () {
    return view('addarticle');
});
Route::get('deletearticle', function () {
    return view('deletearticle');
});
Route::get('articleedit', function () {
    return view('articleedit');
});
Route::get('addcategorie', function () {
    return view('addcategorie');
});
Route::get('deletecategorie', function () {
    return view('deletecategorie');
});
Route::get('categorieedit', function () {
    return view('categorieedit');
});


