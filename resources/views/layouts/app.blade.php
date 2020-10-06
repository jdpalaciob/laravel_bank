<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- styles -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body>
        <header>
            <nav>
                <ul class="links">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{url('login')}}">LOGIN</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{url('register')}}">REGISTER</a></li>
                            @endif                       
                        @endif
                    @else
                        @auth
                            <li>
                                <a href="{{route('home')}}">SESSION</a>
                            </li>
                            <li>
                                <a href="#" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                    LOGOUT
                                </a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                                    @csrf
                                </form>
                            </li>
                        @endauth                       
                    @endguest
                </ul>
            </nav>
        </header>

        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message')['alert']}}
            </div>
        @endif

        <main>
    
            @yield('content')
            
        </main>
    
        <footer>
            <p><small>&copy; laravel bank</small></p>
        </footer>

    </body>
</html>