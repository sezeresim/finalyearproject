@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div >
                <form action="/myclass/{{$classgroup->id}}/add" method="post">
                    @csrf
                    <div class="form-group">
                        <select class="form-control" id="group" name="list_id">
                            @foreach($users as $user)
                                <option class="list-group-item col-md-3" value="{{ $user->id }}">{{$user->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <button type="submit" class="btn btn-success">Kişiyi Ekle</button>
                </form>
            </div>

            <div class="mt-2">
                <table class="table table-striped" >
                    <thead class="thead-dark">
                        <tr>
                            <th >Sıra</th>
                            <th >İsim</th>
                            <th >#user</th>
                        </tr>
                    </thead>
                    <tbody>
                   @foreach($classgroup->classlist as $list)
                        <tr>
                            <td > {{$loop->iteration}}</td>
                            <td> {{ $users->find($list->list_id)->name }}</td>
                            <td>{{ $list->list_id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
