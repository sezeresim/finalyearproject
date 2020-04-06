@extends('layouts.app')

@section('content')
    <div class="container-fluid col-md-10 mt-5 mb-5">
        {{--ABOUT DATA--}}
        <div class="row">
            <div class="col-xl-12 col-md-12 mb-4 ">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 col-md-8">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <ul class="list-group-flush ">
                                        <li class="list-group-item">
                                            "{{ $questionarea->title }}" isimli testi incelemektesiniz.
                                        </li>
                                        <li class="list-group-item ">
                                            "{{ $questionarea->created_at }}" tarihinde oluşturulmuştur.
                                            "{{ $questionarea->last_date }}" tarihine kadar açık durumdadır.
                                        </li>
                                        <li class="list-group-item ">
                                            @if( $questionarea->survey_list)
                                                "{{ $questionarea->survey_state }}" {{ $classgroup->name }} grubu için oluşturulmuştur.
                                            @else
                                                " {{ $questionarea->survey_state }}" durumunda bulunmaktadır.
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto pl-5">
                                <i class="fas fa-info  fa-6x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ANALYSİS -->
        <div class="row">

            <div class="col-xl-5 col-md-5 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Katilimci Sayisi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$questionarea->surveys->count()}}</div>
                            </div>
                            @if($questionarea->survey_state=="private")
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kullanici Sayisi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$questionarea->surveyusers->count()}}</div>
                            </div>
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Katılımcı Oranı</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ intval(($questionarea->surveys->count()* 100 ) / (($questionarea->surveyusers->count())))}}
                                    %
                                </div>
                            </div>
                            @endif
                            <div class="col">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Başarı Oranı</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{intval($success_sta)}} %</div>
                            </div>
                        </div>
                        @if($questionarea->survey_state=="private")
                        <div class="row">
                            <canvas data-surveys="{{$questionarea->surveys->count()}}"
                                    data-users="{{$questionarea->surveyusers->count()-1}}"
                                    id="pie-chart" width="auto" height="auto"></canvas>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-md-7 mb-4">
                <div class="card border-left-info shadow">
                    <div class="card-body">
                        @foreach($questionarea->questions as $question)
                            <div class="border-dark">
                                <ul class="list-group">
                                    <div>{{$question->question}}{{$question->rightanswer}}</div>
                                    @foreach($question->answers as $answer)

                                    <li class="list-group-item d-flex justify-content-between
                                    @if($question->rightanswer == $answer->answer) list-group-item-success
                                     @else list-group-item-warning
                                    @endif">

                                    <div class="text text-dark font-weight-bold">{{ $answer->answer }}</div>

                                    @if($question->responses->count())
                                        <span class="badge badge-success ">{{ intval(($answer->responses->count() * 100 ) /$question->responses->count())}} %</span>
                                    @endif

                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <!-- USERS PANEL ONLY FOR PRİVATE -->
        @if($questionarea->survey_state=="private")
        <div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kullanıcılar</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-bordered" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead class="thead-dark">
                                    <tr role="row">
                                        <th>Sıra</th>
                                        <th>Kullanıcı İsmi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($questionarea->surveyusers as $user)
                                    <tr role="row" class="odd">
                                        <td>{{ $user->list_id }}</td>
                                        <td>{{ auth()->user()->find($user->list_id)->name }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/custom/pieChart.js') }}"></script>
@endsection