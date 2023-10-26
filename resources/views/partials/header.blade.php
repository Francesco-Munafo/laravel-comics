<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="{{Vite::asset('resources/img/favicon.ico')}}" />
    <title>Laravel | DC Comics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{Vite::asset('resources/scss/app.scss')}}">
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header id="app_header">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container d-flex justify-content-between">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" srcset="">
                <div class="navbar p-0" id="navbarNav">
                    <ul class="navbar-nav nav_menu">
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'characters' ? 'cm_active' : '' }}" aria-current="page" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'comics' ? 'cm_active' : '' }}" aria-current="page" href="{{route('comics')}}">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'movies' ? 'cm_active' : '' }}" aria-current="page" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'tv' ? 'cm_active' : '' }}" aria-current="page" href="#">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'games' ? 'cm_active' : '' }}" aria-current="page" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'collectibles' ? 'cm_active' : '' }}" aria-current="page" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'videos' ? 'cm_active' : '' }}" aria-current="page" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'fans' ? 'cm_active' : '' }}" aria-current="page" href="#">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'news' ? 'cm_active' : '' }}" aria-current="page" href="#">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 fw-semibold {{ Route::currentRouteName() === 'shop' ? 'cm_active' : '' }}" aria-current="page" href="#">SHOP</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group border-3 border-bottom border-primary rounded-0">
                            <input class="form-control border-0 p-0 text-end fw-bold" type="Search" value="Search" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary border-0 border p-0" type="button">
                                    <i class="fa fa-search "></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


        </nav>

    </header>