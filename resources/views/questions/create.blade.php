@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/questions" method="post">

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
