@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @foreach($questions as $question)
            <div class="col-md-4 ">
                <div class="card border border-dark mb-4">
                    <div class="card-body">
                        <div class="font-weight-bold">
                            {{ $question->title }}
                        </div>
                        <hr style="border-bottom: 2px;border-color: black">
                        <div  class="text text-dark">
                            {{ $question->purpose }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection

