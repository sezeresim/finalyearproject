@extends('layouts.app')

@section('content')
  <header class="bg-primary pt-5 pb-5">
    <div class="container">
      <div class="row align-items-center">
        <div>
          <h1 class="display-1 text-white mt-5 mb-2">sezeresim</h1>
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
        <div class="counter-box colored mb-2 rounded shadow"><i class="fa fa-user-alt fa-2x tex text-white"></i>
          <hr>
          <span class="counter">{{$userCount}}</span>
          <p>Kayıtlı Kullanıcı</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box colored mb-2 rounded shadow"><i class="fa fa-file-archive fa-2x tex text-white"></i>
          <hr>
          <span class="counter">{{$questionareaCount}}</span>
          <p>Yaratılan Proje </p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box colored mb-2 rounded shadow"><i class="fa fa-spell-check fa-2x tex text-white"></i>
          <hr>
          <span class="counter">{{$responseCount}}</span>
          <p>Verilen Cevap</p>
        </div>
      </div>
      <div class="four col-md-3">
        <div class="counter-box colored mb-2 rounded shadow"><i class="fa fa-question fa-2x tex text-white"></i>
          <hr>
          <span class="counter">{{$questionCount}}</span>
          <p>Soru</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg bg-primary  pb-5 pt-5">
    <section class="pricing">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Ücretsiz</h5>
                <h6 class="card-price text-center">0 ₺<span class="period">/Aylık</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>1000 Cevap</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>3 Anket veya Test</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>2 Adet Grup Oluşturma</li>
                </ul>
                <a href="/pricing" class="btn btn-sm btn-block btn-success text-uppercase">Ödeme Sayfasına Git</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Temel</h5>
                <h6 class="card-price text-center">49 ₺<span class="period">/Aylık</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>10000 Cevap</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>30 Anket veya Test</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>10 Adet Grup Oluşturma</li>
                </ul>
                <a href="/pricing" class="btn btn-sm btn-block btn-success text-uppercase">Ödeme Sayfasına Git</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Profesyonel</h5>
                <h6 class="card-price text-center">199 ₺<span class="period">/Aylık</span></h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Sınırsız Cevap</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>50 Anket veya Test</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>50 Adet Grup Oluşturma</li>
                </ul>
                <a href="/pricing" class="btn btn-sm btn-block btn-success text-uppercase">Ödeme Sayfasına Git</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container  pb-5 pt-5">
    <div class="row">
      <div class="col-lg-5 mt-5 mt-lg-0">
        <p class="text text-dark h1">
          İletişim Kur
        </p>
        {{-- TODO--}}
        {{--<img src="{{ asset('img-bg-contact-intro-2.svg') }}" alt="">--}}
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 ">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="İsim"
                     data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="E-Posta" data-rule="email"
                     data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" data-rule="minlen:4"
                   data-msg="Please enter at least 8 chars of subject">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required"
                      data-msg="Please write something for us" placeholder="Mesaj"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center">
            <button class="btn btn-primary" type="submit">Gönder</button>
          </div>
        </form>

      </div>

    </div>

  </div>
@endsection

