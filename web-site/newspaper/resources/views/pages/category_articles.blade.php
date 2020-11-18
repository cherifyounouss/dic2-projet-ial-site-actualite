@extends('layouts.app')

@section('content')

    <div class="jumbotron container transparent">
        @isset($articles)

                @if ($articles)

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

                    <h1 class="text-center text-capitalize">ARTICLES - {{$selected_category->label}}</h1>

                    <table class="table table-striped table-bordered container">

                        <thead>

                            <th>Titre</th>

                            <th>Contenu</th>

                            <th>Date de dernière modification</th>

                            <th>Action</th>

                        </thead>

                        <tbody>

                            @foreach ($articles as $article)

                                <tr>

                                    <td >{{$article->title}}</td>

                                    <td>{{ \Illuminate\Support\Str::limit($article->content, 30, $end='...')}}</td>

                                    <td>{{$article->updated_at}}</td>

                                <td><a href="/articles/{{$article->id}}" class="btn btn-info">Consulter en détails...</a></td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <p>Aucune donnée</p>

                @endif

            @endisset

            <br>

            <hr>

            <br>

            <div class="text-center">

                <a href="/articles" class="btn btn-primary col-md-6">BACK TO ARTICLES</a>

            </div>

            <br>
    </div>



@endsection
