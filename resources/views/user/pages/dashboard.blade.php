@extends('user.layouts.top-bar')

@section('content-user')

<div class="container">
    <div class="row" style="margin: 0; margin-top: 100px">
        <div class="col-lg-12">
            <div class="card-deck">
                <div class="card card_responsive">
                    <img src="{{asset('images/book_colection/Buku-tia.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tia - Buku Novel</h5>
                        <h4 class="card-text">Tahun terbit : 2019</h4>
                        <a href="">
                        <p class="card-text">
                            <button class="btn btn-sm btn-outline-success">
                                Lihat detail....
                            </button>
                        </p>
                        </a>
                    </div>
                </div>
            <div class="card card_responsive">
                <img src="{{asset('images/book_colection/mindset-1.jpg')}}" class="card-img-top"  alt="...">
            <div class="card-body">
                <h5 class="card-title">Mindset</h5>
                <h4 class="card-text">Tahun terbit : 2016</h4>
                <a href="">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                    </button>
                </p>
                </a>
            </div>
        </div>
        <div class="card card_responsive">
            <img src="{{asset('images/book_colection/senja-dan-pagi-1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Senja dan Pagi</h5>
                <h4 class="card-text">Tahun terbit : 2018</h4>
                <a href="">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                        </button>
                    </p>
                </a>
            </div>
        </div>
        <div class="card card_responsive">
            <img src="{{asset('images/book_colection/Wujud-Tanpa-Suara-Nurul.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Wujud Tanpa Suara</h5>
                <h4 class="card-text">Tahun terbit : 2017</h4>
                <a href="">
                <p class="card-text">
                    <button class="btn btn-sm btn-outline-success">
                        Lihat detail....
                    </button>
                </p>
            </div>
        </div>
            <div class="card card_responsive">
                <img src="{{asset('images/book_colection/Wujud-Tanpa-Suara-Nurul.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tia - Buku Novel</h5>
                    <h4 class="card-text">Tahun terbit : 2017</h4>
                    <a href="">
                        <p class="card-text">
                            <button class="btn btn-sm btn-outline-success">
                                Lihat detail....
                            </button>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
