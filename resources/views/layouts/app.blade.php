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
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <link href="{{ asset('css-sketch/bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ asset('js/bootstrap.bundle.js') }}" ></script>
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css') }}" rel="stylesheet">

<body>
<nav class="navbar navbar-expand-lg bg bg-dark">
  <div class="container">
    <a class="navbar-brand text text-white" href="{{ url('/') }}">
      {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="text text-white navbar-toggler-icon mr-2"><i class="fas fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link text text-white" href="/public">Popüler</a>
        </li>
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a class="nav-link text text-white" href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link text text-white" href="{{ route('register') }}">{{ __('Üye Ol') }}</a>
            </li>
          @endif
        @else
          <li class="nav-item">
            <a class="nav-link text text-white" href="/myclass"> Sınıflarım</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-white" href="/mytests">Testlerim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-white" href="/personal"> Bana Özel</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text text-success text-uppercase" href="#"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

<div>

  @yield('content')
  <footer>

    <div class="bottom section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="mbr-text align-right links mbr-fonts-style display-7">
              <a href="/about" class="text-white-50">Hakkımızda</a> &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="/career" class="text-white-50">Kariyer</a> &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="/references" class="text-white-50">Referanslar</a> &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="/team" class="text-white-50">Takımımız</a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="/contact" class="text-white-50">İletişim</a>
            </p>
          </div>
        </div>
        <div class="footer">
          <div class="media-container-row">
            <div class="col-md-12">
              <hr class="border-info">
            </div>
          </div>
          <div class="media-container-row mbr-white">
            <div class="col-md-6 copyright">
              <p class="mbr-text mbr-fonts-style display-8">
                <small>© Copyright 2020</small>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js') }}"></script>
<script src="{{ asset('fontawesome/js/all.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom/selectState.js') }}"></script>
@yield('script')
@include('sweetalert::alert')
</body>
</html>


