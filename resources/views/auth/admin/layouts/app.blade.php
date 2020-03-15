<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/458ecbc1c5.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.15.0/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>

    <style>
        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dd-button {
            display: inline-block;
            border: 1px solid gray;
            border-radius: 4px;
            padding: 10px 30px 10px 20px;
            background-color: #ffffff;
            cursor: pointer;
            white-space: nowrap;
        }

        .dd-button:after {
            content: '';
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid black;
        }

        .dd-button:hover {
            background-color: #eeeeee;
        }


        .dd-input {
            display: none;
        }

        .dd-menu {
            position: absolute;
            top: 120%;
            right: 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 0;
            margin: 2px 0 0 0;
            box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
            background-color: #ffffff;
            list-style-type: none;
            z-index: 1;
        }

        .dd-input + .dd-menu {
            display: none;
        }

        .dd-input:checked + .dd-menu {
            display: block;
        }

        .dd-menu li {
            padding: 10px 20px;
            cursor: pointer;
            white-space: nowrap;
        }

        .dd-menu li:hover {
            background-color: #f6f6f6;
        }

        .dd-menu li a {
            display: block;
            margin: -10px -20px;
            padding: 10px 20px;
        }

        .dd-menu li.divider{
            padding: 0;
            border-bottom: 1px solid #cccccc;
        }
    </style>
</head>
<body class="bg-gray-100">
<div class="flex flex-col lg:flex-none">
    <div class="lg:w-2/12 bg-gray-700 lg:fixed lg:h-full">

        <!-- Logo -->
        <div class="bg-gray-800 flex items-center justify-center" style="height: 65px;">
            <img src="https://photos.smugmug.com/photos/i-VKnSVxZ/0/X2/i-VKnSVxZ-X2.png" class="h-12">
        </div>

        @include('auth.admin.partials.menu')

    </div>
    <div class="lg:ml-64 flex-1 bg-gray-100">

        <!-- Menu -->
        <div class="px-4 mb-4 bg-white flex items-center justify-end" style="height: 65px;">
            <ul>
                <li>
                    <label class="dropdown">
                        <img class="h-8 rounded-full" src="{{ asset('storage/avatars/'.auth()->user()->avatar)  }}" alt="">
                        <input type="checkbox" class="dd-input" id="test">
                        <ul class="dd-menu">
                            @if(auth()->check() && auth()->user()->role_id === 1)
                                <li><a href="{{ route('dashboard.admin') }}">Administration</a></li>
                            @endif
                            @if(auth()->check())
                                <li><a href="{{ route('dashboard.fbo') }}">Mon compte</a></li>
                            @endif
                                <li><a href="{{ route('home') }}">Revenir au site</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}">Déconnexion</a></li>
                        </ul>
                    </label>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="px-8 mb-4">
            <h1 class="text-2xl text-gray-800">Dashboard</h1>
            @yield('content')
        </div>
    </div>
</div>
@yield('script')
</body>
</html>
