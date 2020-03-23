@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                <a href="myclass/create" class="btn btn-success"> <i class="fas fa-address-card"></i> Sınıf Yarat</a>
            </div>
            <div class="mt-2">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sıra</th>
                        <th scope="col">Test Adı</th>
                        <th scope="col">Düzenle </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $group)
                        <tr>
                            <th scope="row">{{ $loop->iteration }} </th>
                            <td><a>{{ $group->name }}</a></td>
                            <td><a href="{{ $group->path() }}">Sınıfı Yönet</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
