@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg font-weight-bold">
                        Testlerim
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Sıra</th>
                            <th scope="col">Test Adı</th>
                            <th scope="col">Son Tarih</th>
                            <th scope="col">Durum</th>
                            <th scope="col">Skor</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $test)
                            <tr>
                                <td scope="row">
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    <a class="font-weight-bold" href="/surveys/{{$test->question_area_id}}-{{ Str::slug($test->title) }}">{{$test->title}}</a>
                                </td>
                                <td>
                                    {{$test->last_date}}
                                </td>
                                <td>
                                    @if($test->complete)
                                        <i class="text text-success fas fa-check fa-2x"></i>
                                        @else
                                        <i class="text text-warning fas fa-clock fa-2x"></i>
                                    @endif
                                </td>
                                <td>
                                    TODO
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
