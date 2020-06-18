@extends('layouts.app')

@section('content')
<div class="container  pb-5 pt-5">
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
                            <th scope="col">Açıklama</th>
                            <th scope="col">Düzenle </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                            <tr>
                                <th scope="row">{{ $loop->iteration }} </th>
                                <td scope="row"><a>{{ $group->name }}</a></td>
                                <td scope="row"><a>{{ $group->description }}</a></td>
                                <td scope="row">
                                    <div class="row btn-group-sm">
                                      <a class="btn btn-outline-info mr-1" href="{{ $group->path() }}"><i class="fas fa-users-cog"></i> Sınıfı Yönet</a>
                                      <a href="/myclass/{{$group->id}}/delete" class="btn btn-sm btn-outline-danger delete-confirm">Sil</a>
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
@section('script')
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $('.delete-confirm').on('click', function (event) {
      event.preventDefault();
      const url = $(this).attr('href');
      swal({
        title: 'Silmek istiyormusunuz ?',
        text: 'Geri dönüşü yoktur',
        icon: 'warning',
        buttons: ["İptal", "Evet!"],
      }).then(function(value) {
        if (value) {
          window.location.href = url;
        }
      });
    });
  </script>
@endsection
