@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Profilim
                </div>
                <div class="card-body">
                    <ul>
                        <li>İsim :{{ Auth::user()->name }}</li>
                        <li>Yetki :{{ Auth::user()->role }}</li>
                        <li>Toplam Test Sayısı :{{ Auth::user()->post_count }}</li>
                        <li>Oluşturulan Test Sayısı :{{ Auth::user()->post_counter }}</li>
                    </ul>
                </div>
            </div>
            {{--<div class="card mt-4">
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
            </div>--}}

        </div>
    </div>
</div>
@endsection
