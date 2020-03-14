@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mb-2">
                    <div class="card-body">
                        <p>{{$questionarea->title}}</p>
                        <hr>
                        <a class="btn btn-success" href="/questions/{{$questionarea->id}}/question/create">Yeni Soru Ekle</a>
                        <a class="btn btn-success" href="/surveys/{{$questionarea->id}}-{{ Str::slug($questionarea->title) }}">Testi paylaş</a>

                    </div>
                </div>

                @foreach($questionarea->questions as $question)
                    <div class="card mb-2 border border-dark">
                        <div class="card-body ">
                            <p>{{$question->question}}</p>
                            <hr style="border-bottom: 2px;border-color: black">
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <li class="list-group-item">{{ $answer->answer }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
