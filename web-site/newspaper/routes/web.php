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

Route::get('/', 'ArticleController@get_articles');

Route::get('articles', 'ArticleController@get_articles');

Route::get('articles/{id}', 'ArticleController@get_article');

Route::get('articles/category/{category_id}', 'ArticleController@get_articles_by_category');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users','UserHandlingController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/users/remove','UserHandlingController@remove');

Route::resource('article_resources', 'ArticleCrudController');

Auth::routes();

