<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WEB NEWSPAPER</title>

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>

    <body>

        <div class="jumbotron text-center brand_jumbotron container">

            <h1>WELCOME TO YOUR WEB NEWSPAPER</h1>

                <hr>

            @if (!Auth::user())

                <a href="{{ route('login') }}" class="btn btn-outline-success">I'm more than a simple user </a>

            @else

                <h3><b>{{auth()->user()->name}}</b> ({{auth()->user()->profile == 0? 'Editor' : 'Admin'}}) <a class="btn btn-danger" href="/logout">logout</a></h3>


                @if (auth()->user()->profile== 1)

                    <hr>

                    <a href="{{ route('register') }}" class="btn btn-outline-success">Add user </a>

                @endif

            @endif

        </div>

        <hr>

        <main>

            @yield('content')

        </main>

    </body>

</html>
