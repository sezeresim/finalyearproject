@extends('layouts.app')

@section('content')
    <div class="section section-signup" style="background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row">
                <div class="card card-signup" data-background-color="blue">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header text-center">
                            <h3 class="card-title title-up">Login</h3>
                        </div>
                        <div class="card-body">
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                              </span>
                                </div>
                                <input placeholder="Enter Your E-Mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="now-ui-icons ui-1_email-85"></i>
                              </span>
                                </div>
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
                            <button type="submit" class="btn btn-neutral btn-round">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text text-white" href="{{ route('password.request') }}">
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
