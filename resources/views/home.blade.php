@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Yönetim Paneli
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/questionarea/create" class="btn btn-success">Yeni bir test oluştur</a>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    Oluşturduğum Testler
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($question_areas as $question_area)
                            <li class="list-group-item">
                                <a href="{{$question_area->path()}}">{{ $question_area->title }}</a>

                                <div class="mt-2">
                                    <small class="font-weight-bold">Share URL</small>
                                    <p>
                                        <a href="{{ $question_area->publicPath() }}">
                                            {{ $question_area->publicPath() }}
                                        </a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
