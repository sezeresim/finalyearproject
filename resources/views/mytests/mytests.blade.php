@extends('layouts.app')

@section('content')
    <div class="container pt-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div >
                    <div class="mb-2 ">
                        @if(Auth::user()->questionarea()->count()==Auth::user()->post_count)
                            <div class="alert alert-danger" role="alert">
                                <i class="fas fa-exclamation"></i>
                                Daha Fazla Oluşturamazsınız
                            </div>
                        @else
                            <a href="/questionarea/create" class="btn btn-success">Yeni bir test oluştur
                                <span class="badge badge-light">{{Auth::user()->post_count-Auth::user()->questionarea()->count()}}</span>
                            </a>
                        @endif
                    </div>
                    <div class="mt-2 card shadow">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sıra</th>
                                <th scope="col">Test Adı</th>
                                <th scope="col">##</th>
                                <th scope="col">Oluşturma Tarihi</th>
                                <th scope="col">Paylaş</th>
                                <th scope="col">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($question_areas as $question_area)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }} </th>
                                    <td> <a href="{{$question_area->path()}}" class="text text-dark">{{ $question_area->title }}</a></td>
                                    <th scope="col">
                                        @if($question_area->whatIs == "quiz")
                                            Test
                                        @else
                                            Anket
                                        @endif

                                    </th>
                                    <td>{{ $question_area->created_at->todatestring()}}</td>
                                    <td>
                                        <a href="{{ $question_area->publicPath() }}"><i class="fas fa-share"></i>Link</a>
                                    </td>

                                    <td>
                                        <div class="row">
                                            <a class="btn btn-sm btn-outline-warning mr-1" href="/mytests/analysis/{{$question_area->id}}">
                                                <i class="fa fa-chart-bar"></i>
                                                Analiz</a>
                                            <a href="{{$question_area->path()}}" class="btn btn-sm btn-outline-info mr-1"><i class="far fa-eye"></i> Teste Git</a>
                                            <form action="/mytests/{{$question_area->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button  type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('{{ $question_area->title  }} silmek istediğinizden eminmisiniz?')">
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
