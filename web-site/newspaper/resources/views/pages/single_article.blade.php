@extends('layouts.app')

@section('content')

    <div class="card container jumbotron transparent">

        <div class="card-header text-center text-capitalize"> <b>Title : {{$article->title}}</b> </div>

        <div class="card-body">

            <table class="table table-striped">

                <tbody>

                    <tr>

                        <td> <b>Author : </b> {{$article->user->name}}</td>

                    </tr>

                    <tr>

                        <td> <b>Category :</b> {{$article->categorie->label}}</td>

                    </tr>

                    <tr>

                        <td> <b>Content :</b> {{$article->content}}</td>

                    </tr>

                    <tr>

                        <td> <b>Date :</b> {{$article->updated_at}}</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

    <hr>

    <div class="text-center">

        <a href="{{URL::previous()}}" class="btn btn-primary col-md-6">BACK TO ARTICLES</a>

    </div>

@endsection
