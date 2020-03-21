@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

        <section class="pricing">
            <div class="container">
                <div class="row">
                    <!-- Free Tier -->
                    <div class="col-md-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Ücretsiz</h5>
                                <h6 class="card-price text-center">0 ₺<span class="period">/aylık</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Corona</li>
                                </ul>
                                <a href="#" class="btn btn-block btn-success text-uppercase">Satın Al</a>
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-md-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">süper</h5>
                                <h6 class="card-price text-center">149 ₺<span class="period">/aylık</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Süper Corona</li>
                                </ul>
                                <a href="#" class="btn btn-block btn-success text-uppercase">Satın Al</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-md-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">ultra</h5>
                                <h6 class="card-price text-center">299 ₺<span class="period">/aylık</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span> Ultra Corona</li>
                                </ul>
                                <a href="#" class="btn btn-block btn-success text-uppercase">Satın Al</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

