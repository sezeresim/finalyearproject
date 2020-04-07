@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Testlerim
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush text text-dark font-weight-bold">
                            @foreach($tests as $test)
                                <li class="list-group-item">
                                    <a class="btn btn-outline-info" href="/surveys/{{$test->id}}-{{ Str::slug($test->title) }}">{{$test->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
