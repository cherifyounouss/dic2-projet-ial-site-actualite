<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', 'ArticleController@get_articles');

Route::get('/xml/articles', 'ArticleController@get_articles'); // for whoever wants to use damn xml



Route::get('articles/{id}', 'ArticleController@get_article');

Route::get('/xml/articles/{id}', 'ArticleController@get_article');// for whoever wants to use damn xml



Route::get('articles/category/{category_id}', 'ArticleController@get_articles_by_category');

Route::get('/xml/articles/category/{category_id}', 'ArticleController@get_articles_by_category');// for whoever wants to use damn xml
