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
                                    <div class="form-group">
                                        <table id="employee_table" class="col-12">
                                            <tr id="row1" class="row">
                                                <td class="col-md-12">
                                                    <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                           value="{{ old('answers.0.answer') }}"
                                                           id="answer1" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">
                                                    @error('answers.1.answer')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </td>
                                                <td  class="col-md-12">
                                                    <input autocomplete="off" name="answers[][answer]" type="text" class="form-control"
                                                           value="{{ old('answers.1.answer') }}"
                                                           id="answer2" aria-describedby="choicesHelp" placeholder="Cevap oluşturunuz.">
                                                    @error('answers.2.answer')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </td>
                                            </tr>
                                        </table>
                                        <input type="button" class="btn btn-outline-success" onclick="add_row();" value="Cevap Ekle">
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
