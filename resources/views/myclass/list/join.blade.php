@extends('layouts.app')

@section('content')
  <div class="container  pb-5 pt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="mb-2">
          <form action="/myclass/{{$classID}}/list/join/" method="post">
            @csrf
            <button type="submit" class="btn btn-success">Sınıfa Katıl</button>
          </form>
        </div>


      </div>
    </div>
  </div>
@endsection

