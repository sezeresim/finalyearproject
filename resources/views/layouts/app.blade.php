<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/now-ui-kit.css?v=1.3.0') }}" rel="stylesheet">
</head>

<body class="index-page sidebar-collapse" >
<nav class="navbar navbar-expand-lg bg-primary" >
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{--{{ config('app.name', 'Laravel') }}--}}
            Sezer Esim
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="now-ui-icons sport_user-run"></i>
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('home') }}"><i class="now-ui-icons users_single-02"></i>
                                {{ __('Profile') }}
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
</nav>        <div class="wrapper">
            <div class="main">
                @yield('content')
            </div>
            <footer class="footer" >
                <div class="footer" data-background-color="black">
                    <nav>
                        <ul>
                            <li>
                                <a href="http://sezer.best">
                                    @sezeresim
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy;
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>
                    </div>
                </div>
            </footer>
        </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
   {{-- <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/now-ui-kit.js?v=1.3.0') }}" type="text/javascript"></script>
</body>
</html>
