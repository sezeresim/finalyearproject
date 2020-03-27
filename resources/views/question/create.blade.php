@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Soru Oluştur</div>
                    <div class="card-body">
                        <form action="/questions/{{$questionarea->id}}/question" method="post">
                            @csrf

                            <div class="form-group">
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
                                    <div class="form-group">
                                        <div id="answers_form" class="col-12">
                                            <div id="row1" class="row">
                                                <div class="mt-2 input-group">
                                                    <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                           value="{{ old('answers.0.answer') }}"
                                                           id="answer1" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">
                                                    @error('answers.1.answer')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div  class="mt-2 input-group">
                                                    <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                           value="{{ old('answers.1.answer') }}"
                                                           id="answer2" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">
                                                    @error('answers.2.answer')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-success mt-2" onclick="add_answer();">
                                            <i class="fas fa-plus"></i> Ek Cevap Ekle
                                        </button>
                                    </div>
                                </fieldset>
                            </div>
                            <hr>
                                <button type="submit" class="btn btn-success">Soruyu Kaydet</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
