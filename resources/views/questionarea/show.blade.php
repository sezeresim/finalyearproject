@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mb-2">
                    <div class="card-header">{{$questionarea->title}}</div>
                    <div class="card-body">
                        <a class="btn btn-success" href="/questions/{{$questionarea->id}}/question/create">Yeni Soru Ekle</a>
                        <a class="btn btn-outline-info" href="/surveys/{{$questionarea->id}}-{{ Str::slug($questionarea->title) }}">Testi paylaş</a>

                    </div>
                </div>

                @foreach($questionarea->questions as $question)
                    <div class="card mb-2">
                        <div class="card-header">{{$question->question}}</div>
                        <div class="card-body ">
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <li class="list-group-item">{{ $answer->answer }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer">
                            <form action="/questions/{{ $questionarea->id }}/question/{{ $question->id }}" method="post">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    Soruyu Sil
                                </button>
                            </form>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
