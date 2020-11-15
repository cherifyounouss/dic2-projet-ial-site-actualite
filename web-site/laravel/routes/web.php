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
Route::get('deleteuser/{id}','ManageUserController@deleteUser');
Route::get('useredit', function () {
    return view('useredit');
});
Route::get('listusers','ManageUserController@index');
Route::get('gestionarticles/{action}','ArticlesController@index');
Route::get('addarticle', function () {
    return view('addarticle');
});
Route::get('deletearticle/id','ManageArticleController@delete');
Route::post('articleedit','ManageArticleController@edit');
Route::post('addarticle','ManageArticleController@add');
Route::post('more/{titre}/{contenu}','ManageArticleController@more');
Route::get('addcategorie', function () {
    return view('addcategorie');
});
Route::get('deletecategorie', function () {
    return view('deletecategorie');
});
Route::get('categorieedit', function () {
    return view('categorieedit');
});


