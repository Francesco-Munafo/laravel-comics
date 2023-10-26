<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="{{Vite::asset('resources/img/favicon.ico')}}" />
    <title>Laravel | DC Comics</title>

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
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'characters' ? 'cm_active' : '' }}" aria-current="page" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'comics' ? 'cm_active' : '' }}" aria-current="page" href="{{route('comics')}}">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'movies' ? 'cm_active' : '' }}" aria-current="page" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'tv' ? 'cm_active' : '' }}" aria-current="page" href="#">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'games' ? 'cm_active' : '' }}" aria-current="page" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'collectibles' ? 'cm_active' : '' }}" aria-current="page" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'videos' ? 'cm_active' : '' }}" aria-current="page" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'fans' ? 'cm_active' : '' }}" aria-current="page" href="#">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'news' ? 'cm_active' : '' }}" aria-current="page" href="#">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-5 {{ Route::currentRouteName() === 'shop' ? 'cm_active' : '' }}" aria-current="page" href="#">SHOP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="jumbo">

        </section>
        @yield('content')
    </main>
</body>
<footer>
    <section id="app_footer" class="position-relative z-0">
        <div class="container d-flex">
            <div class="col-6 d-flex">
                <div class="col-4 m-0">

                    <h3>DC COMICS</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>

                    <h3>SHOP</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>

                </div>
                <div class="col-4 m-0">
                    <h3>DC</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-4 m-0">
                    <h3>SITES</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 position-relative z-3">
                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="" class="position-absolute z-0 footer_logo">
            </div>
        </div>
    </section>
    <section id="footer_bottom" class="position-relative z-3">
        <div class="container py-4 d-flex justify-content-between">
            <button class="btn border-primary rounded-0 text-white">SIGN-UP NOW!</button>
            <div id="social" class="d-flex">
                <h3 class="me-4">FOLLOW US</h3>
                <a href="#"><img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt=""></a>
                <a href="#"><img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt=""></a>
                <a href="#"><img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt=""></a>
                <a href="#"><img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt=""></a>
                <a href="#"><img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt=""></a>
            </div>
        </div>

    </section>
</footer>

</html>