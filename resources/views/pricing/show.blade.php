@extends('layouts.app')

@section('content')
  <div class="container-fluid bg bg-primary  pb-5 pt-5">
    {!! $iyzicoPayment !!}
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
@endsection

