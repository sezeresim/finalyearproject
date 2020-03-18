@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>
                    <div class="mt-2">
                        @if(Auth::user()->post_counter==Auth::user()->post_count)
                            <div class="alert alert-danger" role="alert">
                                <i class="fas fa-exclamation"></i>
                                Daha Fazla Oluşturamazsınız
                            </div>
                        @else
                            <a href="/questionarea/create" class="btn btn-success">Yeni bir test oluştur</a>
                        @endif
                    </div>
                    <div class="mt-2">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sıra</th>
                                <th scope="col">Test Adı</th>
                                <th scope="col">Toplam Soru</th>
                                <th scope="col">Toplam Katılımcı</th>
                                <th scope="col">Oluşturma Tarihi</th>
                                <th scope="col">Paylaşım Linki</th>
                                <th scope="col">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($question_areas as $question_area)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }} </th>
                                    <td> <a href="{{$question_area->path()}}" class="text text-dark">{{ $question_area->title }}</a></td>
                                    <td>{{ $question_area->questions->count() }}</td>
                                    <td>{{$question_area->surveys->count()}}</td>
                                    <td>{{ $question_area->created_at }}</td>
                                    <td>
                                        <a href="{{ $question_area->publicPath() }}">{{ $question_area->publicPath() }}</a>
                                    </td>

                                    <td>
                                        <a href="{{$question_area->path()}}" class="btn btn-sm btn-info">Teste Git</a>
                                        <a href="" class="btn btn-sm btn-danger">Sil</a>
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
