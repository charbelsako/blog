<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {      
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems);
        });
    </script>
        
</head>
<body>
    <div id="app">
        <nav>
            <div class="container">
                <a class="brand-logo left" href="/">
                    {{ config('app.name', 'Laravel') }}
                </a>
                

                    <!-- Right Side Of Navbar -->
                    <ul class="right">
                        <li><a class="" href="/">Home</a></li>
                        <li><a class="" href="/about">About</a></li>
                        <li><a class="" href="/services">Services</a></li>
                        <li><a class="" href="/posts">Blog</a></li> 
                    
                    <!-- Authentication Links -->
                    @guest
                        <li class="">
                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="">
                            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="">
                            <a  class="dropdown-trigger btn" href="#" data-target="dropdown">
                                {{ Auth::user()->name }} <i class="right material-icons">arrow_drop_down</i>
                            </a>

                            <ul id="dropdown" class="dropdown-content">
                                <li><a href="/home">Dashboard</a></li>
                                <li class="divider" tabindex="-1"></li>
                                <li><a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                    
                    
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="center">
                        
                    </ul>
                
            </div>
        </nav>

        <main class="py-4 container">
            @include('inc.messages')
            @yield('bodyContent')     
        </main>
    </div>

    
</body>
</html>
