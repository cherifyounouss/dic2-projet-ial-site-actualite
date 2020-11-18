<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use App\Models\Categorie;

use Illuminate\Support\Facades\DB;

class ArticleController extends Controller{

    //
    public function get_articles(Request $request){

        $articles = Article::orderBy('created_at','desc')->get();

        if($request->is('*api/articles')){

            return json_encode($articles);

        }
        elseif($request->is('*api/xml/articles')){

            $articles = $articles->toArray();

            $xml = new \SimpleXmlElement('<root/>');

            foreach ($articles as $article) {

                $article_node = $xml->addChild('article');

                $article_node->addChild('id',$article['id']);

                $article_node->addChild('title',$article['title']);

                $article_node->addChild('content',$article['content']);

                $article_node->addChild('user_id',$article['user_id']);

                $article_node->addChild('categorie_id',$article['categorie_id']);

            }

            return $xml->asXML();

        }
        else{

            $articles = DB::table('articles')->orderBy('created_at','desc')->paginate(2);

            $categories = Categorie::all();

            return view('pages.articles')->with([

                'articles'=>$articles,

                'categories'=>$categories

            ]);

        }

    }

    public function get_article(Request $request, $id){

        $article = Article::find($id);

        if($request->is('*api/articles/*')){

            return json_encode($article);

        }
        elseif($request->is('*api/xml/articles/*')){

            $xml = new \SimpleXmlElement('<root/>');

            $article_node = $xml->addChild('article');

            $article_node->addChild('id',$article->id);

            $article_node->addChild('title',$article->title);

            $article_node->addChild('content',$article->content);

            $article_node->addChild('user_id',$article->user_id);

            $article_node->addChild('categorie_id',$article->categorie_id);

            return $xml->asXML();

        }else{

            return view('pages.single_article')->with('article',$article);

        }

    }

    public function get_articles_by_category(Request $request, $category_id){

        $category = Categorie::find($category_id);

        $articles = $category->article()->get();

        if($request->is('*api/articles/category/*')){

            return json_encode($articles);

        }elseif($request->is('*api/xml/articles/category/*')){

            $articles = $articles->toArray();

            $xml = new \SimpleXmlElement('<root/>');

            foreach ($articles as $article) {

                $article_node = $xml->addChild('article');

                $article_node->addChild('id',$article['id']);

                $article_node->addChild('title',$article['title']);

                $article_node->addChild('content',$article['content']);

                $article_node->addChild('user_id',$article['user_id']);

                $article_node->addChild('categorie_id',$article['categorie_id']);

            }

            return $xml->asXML();

        }else{

            $category = Categorie::find($category_id);

            $categories = Categorie::all();

            return view('pages.category_articles')->with([

                'articles'=>$articles,

                'selected_category'=>$category,

                'categories'=>$categories,

            ]);
        }
    }

}
