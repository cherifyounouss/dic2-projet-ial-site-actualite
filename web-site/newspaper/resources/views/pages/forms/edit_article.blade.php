@extends('layouts.app')

@section('content')

    <div class="card container jumbotron transparent">

        <div class="card-header"><b>ARTICLE EDITING FORM</b></div>

        <div class="card-body">

            {!! Form::open(['action' => array('ArticleCrudController@update',$article->id ), 'method'=>'PUT']) !!}

                <div class="form-group">

                    {!! Form::label('title', 'Title', []) !!}

                    {!! Form::text('title', $article->title, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('content', 'Content', []) !!}

                    {!! Form::text('content', $article->content, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('category', 'Category', []) !!}

                    <select name="category_id" class="form-control">

                        @foreach ($categories as $category)

                            <option value="{{$category->id}}" {{$category->id == $article->categorie_id? 'selected' : ''}} >

                                {{$category->label}}

                            </option>

                        @endforeach

                    </select>

                </div>

                {!! Form::submit('Save changes', ['class'=>'btn btn-success col-md-6 offset-3']) !!}

            {!! Form::close() !!}

        </div>

    </div>

    <hr>

    <div class="text-center">

        <a href="/articles" class="btn btn-primary col-md-6">BACK TO ARTICLES</a>

    </div>

    <hr>

@endsection
