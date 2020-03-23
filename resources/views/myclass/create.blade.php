@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/myclass" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="category font-weight-bold">Sınıfınız için bir isim giriniz</label>
                                <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" autocomplete="off" placeholder="Sınıf İsminiz">
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Sınıf Oluştur.</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
