@extends('layouts.app')

@section('content')

    <div class="container jumbotron transparent">
 @isset($users)

        @if($users!=null)

            <div class="card container">

                <div class="card-header">USERS</div>

                <div class="card-body">

                    <table class="table table-stripped">

                        <thead>

                            <th>Username</th>

                            <th>Login</th>

                            <th>Profile</th>

                            <th>Action</th>

                        </thead>

                        <tbody>

                            @foreach ($users as $user)

                                <tr>

                                    <td>{{$user->name}}</td>

                                     <td>{{$user->login}}</td>

                                    @if($user->profile == 0)

                                        <td>Editor</td>

                                        {!! Form::open(['action'=>'UserHandlingController@remove', 'method'=>'POST']) !!}

                                        <td>

                                            {!! Form::hidden('user_id', $user->id) !!}

                                            {!! Form::submit('Remove user', ['class'=>'btn btn-danger']) !!}

                                        </td>

                                        {!! Form::close() !!}

                                    @else

                                        <td>Admin</td>

                                        <td><a href="#" class="btn btn-danger disabled">Remove user</a></td>

                                    @endif

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        @endif

    @endisset

    </div>


@endsection
