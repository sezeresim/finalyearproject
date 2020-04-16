<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css-sketch/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <script src="{{ asset('fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css') }}" rel="stylesheet">
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js') }}"></script>
    <script src="{{ asset('https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js') }}" referrerpolicy="origin"></script>
<body>
<nav class="navbar navbar-expand-lg bg bg-dark" >
    <div class="container">
        <a class="navbar-brand text text-white" href="{{ url('/') }}">
            {{--{{ config('app.name', 'Laravel') }}--}}
            Sezer Esim
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="text text-white navbar-toggler-icon mr-2"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Üye Ol') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link text text-white" href="/myclass"><i class="fas fa-users"></i> Sınıflarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-white" href="/mytests"><i class="fas fa-poll-h"></i> Testlerim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-white" href="/personal"><i class="fas fa-list-ul"></i> Bana Özel</a>
                    </li>
                    {{--<li class="nav-item">
                        <a href="" class="nav-link text text-white">
                            --}}{{--TODO--}}{{--
                            <i class="fas fa-bell"></i>
                            <span class="badge badge-warning">2</span>
                        </a>
                    </li>--}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text text-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user"></i>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                {{ __('Profilim') }}
                                <i class="fas fa-user"></i>
                            </a>
                            <a class="dropdown-item" href="/pricing">
                               Ücretlendirme
                                <i class="fas fa-cart-plus"></i>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Çıkış Yap') }}
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
<div style="background-color: #879db7" >
    <div class="pt-5 mb-5" >
        @yield('content')
    </div>
    <footer>
        <!--Bottom Footer-->
        <div class="bottom section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            sezer.best
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Bottom Footer-->
    </footer>
</div>
<!--   Core JS Files   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom/selectState.js') }}"></script>
@yield('script')
</body>
</html>

