@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mt-2">
                <div>
                    <a href="myclass/create" class="btn btn-success"> <i class="fas fa-address-card"></i> Sınıf Yarat</a>
                </div>
                <div class="card shadow mt-2">

                    <table class="table ">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Sıra</th>
                            <th scope="col">Sınıf Adı</th>
                            <th scope="col">Düzenle </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                            <tr>
                                <th scope="row">{{ $loop->iteration }} </th>
                                <td scope="row"><a>{{ $group->name }}</a></td>
                                <td scope="row">
                                    <div class="row btn-group-sm">
                                        <a class="btn btn-outline-info mr-1" href="{{ $group->path() }}"><i class="fas fa-users-cog"></i> Sınıfı Yönet</a>
                                        <form action="/myclass/{{$group->id}}/delete" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button  type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('{{ $group->name }} sınıfını silmek istediğinizden eminmisiniz?')">
                                                <i class="fa fa-trash"></i> Sil
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
