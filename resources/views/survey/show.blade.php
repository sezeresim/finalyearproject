@extends('layouts.app')

@section('content')
  <div class="container  pb-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">

        <h1>{{$questionarea->title}}</h1>

        <form action="/surveys/{{$questionarea->id}}-{{Str::slug($questionarea->title)}}" method="post">
          @csrf

          @foreach($questionarea->questions as $key => $question)
            <div class="card mb-2">
              <div class="card-header">{{--<strong>{{ $key + 1 }}</strong>--}} {!! $question->question !!}</div>
              <div class="card-body">

                @error('responses.' .$key. '.answer_id')
                <small class="text text-danger">{{$message}}</small>
                @enderror

                <ul class="list-group">
                  @foreach($question->answers as $answer)
                    <li class="list-group-item">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label" for="answer{{ $answer->id }}">
                          <input class="form-check-input" type="radio" value="{{$answer->id}}"
                                 {{ (old('responses.' .$key. '.answer_id') == $answer->id) ?'checked':'' }}
                                 name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}">
                          {{--<span class="form-check-sign"></span>--}}
                          {{ $answer->answer }}
                          <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{$question->id}}">
                        </label>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          @endforeach

          @if($questionarea->survey_state=="public")
            @guest
              <div class="card mb-2 ">
                <div class="card-header ">Kullanıcı Bilgileri</div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name" class="category">Kullanıcı Adı</label>
                    <input name="survey[name]" type="text" class="form-control" id="name" aria-describedby="nameHelp"
                           placeholder="Kullanıcı Adınızı Giriniz">
                  </div>
                  <div class="form-group">
                    <label for="email" class="category">E-Posta Adresi</label>
                    <input name="survey[email]" type="email" class="form-control" id="email"
                           aria-describedby="emailHelp" placeholder="E-Posta Giriniz">
                  </div>
                </div>
              </div>
            @endguest
          @endif
          <div class="card mb-2 ">
            @error('survey.email')
            <small class="text-danger">{{$message}}</small>
            @enderror
            <div class="card-body">
              <button class="btn btn-outline-success" type="submit">Tamamla</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
@endsection
