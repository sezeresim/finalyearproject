@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>Title : {{$question->id}}</p>
                        <p>Question Id : {{$question->id}}</p>
                        <p>Question Purpose : {{$question->purpose}}</p>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
