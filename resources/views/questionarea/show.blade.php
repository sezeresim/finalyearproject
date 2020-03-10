@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>{{$questionarea->title}}</p>
                        <hr>
                        <a class="btn btn-success" href="/questions/{{$questionarea->id}}/tests/create">Yeni Soru Ekle</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
