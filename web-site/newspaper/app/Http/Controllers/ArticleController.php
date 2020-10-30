<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use App\Models\Categorie;

class ArticleController extends Controller{

    //

    public function get_articles(){

        $articles = Article::all();

        var_dump($articles);

        die();

    }

    public function get_article($id){

        $article = Article::find($id);

        var_dump($article);

        die();

    }

    public function get_articles_by_category($category_id){

        $category = Categorie::find($category_id);

        $articles = $category->article()->get();

        var_dump($articles);

        die();

    }


}
