@extends('layouts.app')

@section('content')

    <div class="jumbotron container transparent">

        @isset($articles)

            @if ($articles)

                @if (auth()->user()!= null && auth()->user()->profile == 0)

                    <a href="/article_resources/create" class="btn btn-outline-info col-md-4 offset-4">ADD AN ARTICLE</a>

                @endif

                <br>

                <hr>

                <br>

                <br>

                <h1 class="text-center">CATEGORIES</h1>

                <table class="table table-secondary container">

                    <tbody>

                        <td>♦</td>

                        @foreach ($categories as $category)

                            <td><a href="/articles/category/{{$category->id}}" class="btn btn-success">{{$category->label}}</a></td>

                            <td>♦</td>

                        @endforeach

                    </tbody>

                </table>

                <br>

                <hr>

                <br>

                <br>

                <h1 class="text-center">BREAKING NEWS...</h1>

                <table class="table table-striped table-bordered container">

                    <thead>

                        <th>Titre</th>

                        <th>Contenu</th>

                        <th>Date de dernière modification</th>

                        <th>Action</th>

                        @if (auth()->user() != null && auth()->user()->profile == 0)

                            <th>Action</th>

                            <th>Action</th>

                        @endif

                    </thead>

                    <tbody>

                        @foreach ($articles as $article)

                            <tr>

                                <td><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>

                                <td>{{ \Illuminate\Support\Str::limit($article->content, 30, $end='...')}}</td>

                                <td>{{$article->updated_at}}</td>

                                <td><a href="/articles/{{$article->id}}" class="btn btn-info">Read full article</a></td>

                                @if (auth()->user()!= null && auth()->user()->profile == 0 )

                                    @if (auth()->user()->id == $article->user_id)

                                        <td><a href="/article_resources/{{$article->id}}/edit" class="btn btn-primary">Edit</a></td>

                                        {!! Form::open(['action' => array('ArticleCrudController@destroy',$article->id ), 'method'=>'DELETE']) !!}

                                            <td>{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}</td>

                                        {!! Form::close() !!}


                                    @else

                                        <td><a href="#" class="btn btn-success btn-primary disabled">Edit (forbidden)</a></td>

                                        <td><a href="#" class="btn btn-success btn-danger disabled">Delete (forbidden)</a></td>
                                    @endif

                                @endif

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            @else

                <p>Aucune donnée</p>

            @endif

            {{$articles->links()}}

        @endisset
    </div>


@endsection
