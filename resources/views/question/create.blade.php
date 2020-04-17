@extends('layouts.app')

@section('content')
    <div class="container  pb-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="/questions/{{$questionarea->id}}/question" method="post">
                            @csrf
                            <div class="form-group">
                               {{-- <input autocomplete="off" name="question[question]" type="text" class="form-control"
                                       value="{{ old('question.question') }}"
                                       id="question" aria-describedby="questionHelp" placeholder="Soru oluşturunuz.">--}}
                                <textarea name="question[question]" id="mytextarea" cols="30" rows="10" class="form-control"
                                          value="{{ old('question.question') }}"
                                           aria-describedby="questionHelp" placeholder="Soru oluşturunuz."></textarea>
                                @error('question.question')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            @if($questionarea->whatIs=="quiz")
                            <div class="form-group">
                                <input autocomplete="off" name="question[rightanswer]" type="text" class="form-control"
                                       value="{{ old('rightanswer') }}"
                                       id="rightanswer" aria-describedby="rightanswerHelp" placeholder="Doğru Cevabı Giriniz">
                                @error('question.rightanswer')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" name="question[score]" type="text" class="form-control"
                                       value="{{ old('score') }}"
                                       id="score" aria-describedby="scoreHelp" placeholder="Puan">
                                @error('question.score')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            @endif
                            <div class="form-group col-md-12" id="answers_form">
                                <fieldset >
                                    <legend >Cevaplar</legend>
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
                                </fieldset>
                                <div class="text-center">
                                    <button type="button" class="btn btn-outline-success mt-2 " onclick="add_answer();">
                                        <i class="fas fa-plus"></i> Cevap Ekle
                                    </button>
                                </div>

                            </div>
                            <hr>
                                <button type="submit" class="btn btn-warning">Soruyu Kaydet</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
@endsection