@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Testlerim
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Sıra</th>
                            <th scope="col">Test Adı</th>
                            <th scope="col">Son Tarih</th>
                            <th scope="col">Tamamlandı</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $test)
                            <tr>
                                <td scope="row">
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    <a class="font-weight-bold" href="/surveys/{{$test->id}}-{{ Str::slug($test->title) }}">{{$test->title}}</a>
                                </td>
                                <td>
                                    {{$test->last_date}}
                                </td>
                                <td>
                                    {{ $test->complete}}
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
