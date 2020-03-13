@extends('layouts.app')

@section('content')
    <div >
        <div class="container col-md-6">
            <div>
                <div class="card" data-background-color="blue">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header text-center">
                            <h3 class="card-title title-up">Login</h3>
                        </div>
                        <div class="card-body mb-2">
                            <div class="input-group mb-2">
                                <input placeholder="Enter Your E-Mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group mb-3">

                                <input placeholder="Enter Your Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-success">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-outline-danger" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
