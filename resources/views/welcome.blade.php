@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="row ">
            @foreach($questions as $question)
                <div class="col-md-4">

                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="font-weight-bold">
                            {{ $question->title }}
                        </div>
                        <hr style="border-bottom: 2px;border-color: black">
                        <div  class="text text-dark">
                            {{ $question->purpose }}
                        </div>
                        <br>
                        <div class="align-items-center">
                            <button onclick="likeIncrement({{$question->id}});" id="{{$question->id}}"  type="button" class="btn btn-outline" >
                            <span id="like_counter_{{$question->id}}">{{$question->like_count}}</span>
                            </button>
                            <a class="btn btn-success" href="/surveys/{{$question->id}}-{{ Str::slug($question->title) }}">Teste Git</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
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

@section('script')
    <script src="{{ asset('js/custom/likeSystem.js') }}"></script>

@endsection

