@extends('layouts.app')

@section('content')

    <div class="container pb-5 pt-5">
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
                            <a onclick="likeIncrement({{$question->id}});" id="{{$question->id}}"  type="button" class="btn btn-outline-primary" >
                                <i class="fas fa-thumbs-up"></i>
                                <span id="like_counter_{{$question->id}}">{{$question->like_count}}</span>
                            </a>

                            <a class="btn btn-outline-success" href="/surveys/{{$question->id}}-{{ Str::slug($question->title) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </div>
@endsection


@section('script')
    <script src="{{ asset('js/custom/likeSystem.js') }}"></script>
@endsection

