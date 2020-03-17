@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Soru Oluştur  ID:{{$questionarea->id}}</div>
                    <div class="card-body">
                        <form action="/questions/{{$questionarea->id}}/question" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="question" class="category">Soru</label>
                                <input autocomplete="off" name="question[question]" type="text" class="form-control"
                                       value="{{ old('question.question') }}"
                                       id="question" aria-describedby="questionHelp" placeholder="Soru oluşturunuz.">
                                @error('question.question')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <legend>Cevaplar</legend>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer1" class="category">Cevap 1</label>
                                            <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                   value="{{ old('answers.0.answer') }}"
                                                   id="answer1" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">

                                            @error('answers.0.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer2" class="category">Cevap 2</label>
                                            <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                   value="{{ old('answers.1.answer') }}"
                                                   id="answer2" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">
                                            @error('answers.1.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer3" class="category">Cevap 3</label>
                                            <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                   value="{{ old('answers.2.answer') }}"
                                                   id="answer3" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">
                                            @error('answers.2.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer4" class="category">Cevap 4</label>
                                            <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                   value="{{ old('answers.3.answer') }}"
                                                   id="answer4" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">
                                            @error('answers.3.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <button type="submit" class="btn btn-success">Soru Ekle</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
