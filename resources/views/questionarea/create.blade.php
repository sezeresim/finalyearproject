@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/questionarea/store" >
                            @csrf
                            <div class="form-group">
                                <label for="title" class="category font-weight-bold">İsim</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="TitleHelp" autocomplete="off" placeholder="Testinize İsim Veriniz.">
                                @error('title')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="purpose" class="category font-weight-bold">Hedef veya Amaç</label>
                                <textarea name="purpose" type="text" rows="3" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Testinizin Amacı Nedir."></textarea>
                                @error('purpose')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="last_date" class="category font-weight-bold">Son Tarih</label>
                                <input placeholder="Tarih için zaman ayarlayın"  id="last_date" type="date" class="form-control " name="last_date" autofocus>
                                @error('last_date')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <label for="title" class="category font-weight-bold">Anket veya Test</label>
                            <div class="input-group" >
                                <select class="form-control custom-select" name="whatIs" id="whatIs" >
                                    <option value="quiz" selected>Test</option>
                                    <option value="survey">Anket</option>
                                </select>
                                @error('survey_state')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <label for="title" class="category font-weight-bold">Paylaşım Ayarları</label>
                            <div class="input-group" >
                                <select class="form-control custom-select" name="survey_state" id="surveyState" >
                                    <option value="public" selected>Herkese Açık</option>
                                    <option value="private">Gizli</option>
                                </select>
                                @error('survey_state')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="title" class="category font-weight-bold">Sınıf Tanımla</label>
                                <select class="form-control custom-select" name="survey_list" id="surveyState" >
                                    <option value="0">Public</option>
                                    @foreach($userclass as $class)
                                    <option value="{{ $class->id }}" selected>{{ $class->name }}</option>
                                    @endforeach
                                </select>
                                @error('last_date')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-2">Kaydet</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
