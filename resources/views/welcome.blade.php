@extends('layouts.app')

@section('content')
    <header class="bg-primary pt-5 pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div >
                    <h1 class="display-1 text-white mt-5 mb-2">szrsq</h1>
                    <p class="lead mb-1 text-white-50">
                        Çevrimiçi anket ve test oluşturma.
                    </p>
                    <p class="lead mb-1 text-white-50">
                        Özelleştirebilir sınıf sistemi ile grupları değerlendirebilirme.
                    </p>
                    <p class="lead mb-1 text-white-50">
                        Detaylı analiz ve değerlendirme sistemi.
                    </p>
                </div>
            </div>

        </div>
    </header>
    <div class="container-fluid  pt-5 pb-5">
        <div class="row">
            <div class="four col-md-3">
                <div class="counter-box colored mb-2"> <i class="fa fa-space-shuttle fa-2x tex text-white"></i>
                    <hr>
                    <span class="counter">{{auth()->user()->count()}}</span>
                    <p>Kayıtlı Kullanıcı</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box colored mb-2"> <i class="fa fa-space-shuttle fa-2x tex text-white"></i>
                    <hr>
                    <span class="counter">{{$questionareaCount}}</span>
                    <p>Yaratılan Proje </p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box colored mb-2"> <i class="fa fa-space-shuttle fa-2x tex text-white"></i>
                    <hr>
                    <span class="counter">{{$responseCount}}</span>
                    <p>Verilen Cevap</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box colored mb-2"> <i class="fa fa-space-shuttle fa-2x tex text-white"></i>
                    <hr>
                    <span class="counter">{{$questionCount}}</span>
                    <p>Soru</p>
                </div>
            </div>
        </div>
    </div>
@endsection

