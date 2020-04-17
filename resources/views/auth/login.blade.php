@extends('layouts.app')

@section('content')
    <div >
        <div class="container col-md-6 pt-5 pb-5">
            <div>
                <div class="card" data-background-color="blue">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header text-center">
                            <h3 class="card-title title-up">Giriş Yap</h3>
                        </div>
                        <div class="card-body mb-2">
                            <div class="input-group mb-2">
                                <input placeholder="E-Posta Adresinizi Giriniz" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group mb-3">

                                <input placeholder="Şifrenizi Giriniz" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input text-white" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="form-check-sign text-white"></span>
                                    {{ __('Beni Hatırla') }}
                                </label>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-success">
                                {{ __('Giriş Yap') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-outline-danger" href="{{ route('password.request') }}">
                                    {{ __('Şifremi Unuttum!') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
