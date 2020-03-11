@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>{{$questionarea->title}}</h1>
                <form action="#" method="post">
                    @csrf

                    @foreach($questionarea->questions as $key => $question)
                        <div class="card">
                            <div class="card-body">
                                <div><strong>{{ $key + 1 }}</strong> {{$question->question}}</div>
                                <hr>
                                <ul class="list-group">
                                    @foreach($question->answers as $answer)
                                        <li class="list-group-item">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="#" id="answer{{ $answer->id }}">
                                                    <span class="form-check-sign"></span>
                                                    {{ $answer->answer }}
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </form>
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="post">

                            @csrf

                            <div class="form-group">
                                <label for="title" class="category">Title</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="TitleHelp" placeholder="Testinize İsim Veriniz.">
                                @error('title')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="purpose" class="category">Purpose</label>
                                <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Testinizin Amacı Nedir.">
                                @error('purpose')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Kaydet</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
