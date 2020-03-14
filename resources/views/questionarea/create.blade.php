@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/questionarea" method="post">

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
                            <button type="submit" class="btn btn-success">Kaydet</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
