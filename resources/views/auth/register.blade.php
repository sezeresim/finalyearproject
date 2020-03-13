@extends('layouts.app')

@section('content')
    <div>
        <div class="container col-md-6">
            <div >
                <div class="card " data-background-color="blue">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-header text-center">
                            <h3 class="card-title title-up">Register</h3>
                        </div>
                        <div class="card-body mb-2">
                            <div class="input-group no-borde mb-2">
                                <input placeholder="Enter Your Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group  mb-2">
                                <input placeholder="Enter Your E-Mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group mb-2">

                                <input placeholder="Enter Your Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group mb-2">
                                    <input placeholder="Enter Your Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-success">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
