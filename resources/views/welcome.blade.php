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
                        <br>
                        <div>
                            <a class="btn btn-success col-md-12" href="/surveys/{{$question->id}}-{{ Str::slug($question->title) }}">Teste Git</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        {{--<div>
            <select class="form-control" id="group" name="group">
                @foreach($users as $user)
                    <option class="list-group-item col-md-3" value="{{ $user->id }}">{{$user->email}}</option>
                @endforeach
            </select>
        </div>
        <div id="example"></div>--}}
    </div>
@endsection

