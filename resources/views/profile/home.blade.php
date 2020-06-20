@extends('layouts.app')

@section('content')
  <div class="container  pb-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card mt-2">
          <div class="card-header font-weight-bold bg bg-dark text text-light">
            Profilim
          </div>
          <div class="card-body">
            <div class="about-avatar">
              <img src="https://www.cu.edu.tr/storage/kurumsal/Cu_Logo.png"
                   class="img-thumbnail rounded mx-auto d-block" style='width: 15rem' title="profile_avatar"
                   alt="profile_avatar">
            </div>
            <ul class="list-group list-group-flush text text-dark font-weight-bold">
              <li class="list-group-item">İsim :{{ Auth::user()->name }}</li>
              <li class="list-group-item">E-Posta :{{ Auth::user()->email }}</li>
              <li class="list-group-item">Ülke :{{ Auth::user()->country }}</li>
              <li class="list-group-item">Doğum Tarihi :{{ Auth::user()->birtdate }}</li>
              <li class="list-group-item">Yetki :{{ Auth::user()->role }}</li>
              <li class="list-group-item">Toplam Test Sayısı :{{ Auth::user()->post_count }}</li>
              <li class="list-group-item">Oluşturulan Test Sayısı :{{ Auth::user()->questionarea()->count() }}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mt-2">
          <div class="card-header font-weight-bold bg bg-dark text text-light">
            Ayarlar
          </div>
          <div class="card-body">
            <form method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ Auth::user()->country }}" class="form-control">
              </div>
              <button type="submit" class="btn btn-success" disabled>
                <i class="fa fa-upload"></i> Update
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
