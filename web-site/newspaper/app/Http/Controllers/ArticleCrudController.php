<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleCrudController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
        $title = $request->input('title');

        $content = $request->input('content');

        $categorie_id = $request->input('categorie_id');

        $user_id = $request->input('user_id');

        $article = new Article();

        $article->title = $title;

        $article->content = $content;

        $article->categorie_id = $categorie_id;

        $article->user_id = $user_id;

        $article->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
        $title = $request->input('title');

        $content = $request->input('content');

        $categorie_id = $request->input('categorie_id');

        $article = Article::find($id);

        $article->title = $title;

        $article->content = $content;

        $article->categorie_id = $categorie_id;

        $article->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
        $removal_result = Article::destroy($id);

    }
}
