<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use App\Models\Categorie;

class ArticleController extends Controller{

    //

    public function get_articles(Request $request){


        $articles = Article::all();

        if($request->is('*api/articles')){

            return json_encode($articles);

        }else{

            echo("wait for Coumba");

        }

    }

    public function get_article(Request $request, $id){

        $article = Article::find($id);

        if($request->is('*api/articles/*')){

            return json_encode($article);

        }else{

            echo("wait for Coumba");

        }

    }

    public function get_articles_by_category(Request $request, $category_id){

        $category = Categorie::find($category_id);

        $articles = $category->article()->get();

        if($request->is('*api/articles/category/*')){

            return json_encode($articles);

        }else{

            echo("wait for Coumba");

        }
    }


}
