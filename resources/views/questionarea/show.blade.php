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
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>{{ $answer->answer }}</div>
                                        @if($question->responses->count())
                                            <div>{{ intval(($answer->responses->count() * 100 ) /$question->responses->count())}} %</div>
                                        @endif
                                    </li>

                                   {{-- <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ ($answer->responses->count() * 100 ) /$question->responses->count()}}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar" role="progressbar" style="width: {{ 100-(($answer->responses->count() * 100 ) /$question->responses->count())}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>--}}

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
