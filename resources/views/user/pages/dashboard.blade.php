@extends('user.layouts.top-bar')

@section('content-user')

<div class="container">

    <nav class="navbar">
        <div class="container">
            <form class="form-inline mx-auto">
                <input class="form-control mr-sm-2" type="search" size="70px" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="row" style="margin: 0; margin-top: 50px">
        <div class="col-lg-12">
            <h5 class="py-2">Top Trending</h5>
            <div class="card-deck">
                <div class="card card_responsive">
                    <img src="{{asset('images/book_colection/tia.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Tia</p>
                        <a href="/detail">
                        <p class="card-text">
                            <button class="btn btn-sm btn-outline-success">
                                Lihat detail....
                            </button>
                            <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                        </p>
                        </a>
                    </div>
                </div>
            <div class="card card_responsive">
                <img src="{{asset('images/book_colection/mindset.jpg')}}" class="card-img-top"  alt="...">
            <div class="card-body">
                <p class="card-title">Mindset</p>
                <a href="/detail">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                        </button>
                        <button class="btn btn-sm">
                            <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                        </button>
                    </p>
                </a>
            </div>
        </div>
        <div class="card card_responsive">
            <div class="x_title">

            </div>
            <img src="{{asset('images/book_colection/senja-dan-pagi.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Senja dan Pagi</p>
                <a href="/detail">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                        </button>
                         <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                    </p>
                </a>
            </div>
        </div>
        <div class="card card_responsive">
            <img src="{{asset('images/book_colection/Wujud-Tanpa-Suara.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Wujud Tanpa Suara</p>
                <a href="/detail">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                        </button>
                         <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                    </p>
                </a>
            </div>
        </div>
            <div class="card card_responsive">
                <img src="{{asset('images/book_colection/Hyderabad.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">Hyderabad</p>
                    <a href="/detail">
                        <p class="card-text">
                            <button class="btn btn-sm btn-outline-success">
                                Lihat detail....
                            </button>
                             <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <div class="col-lg-12">
            <h5 class="py-2 mt-4">Baca Disini</h5>
            <div class="card-deck">
                <div class="card card_responsive">
                    <img src="{{asset('images/book_colection/Cooking.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Cooking</p>
                        <a href="/detail">
                        <p class="card-text">
                            <button class="btn btn-sm btn-outline-success">
                                Lihat detail....
                            </button>
                             <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                        </p>
                        </a>
                    </div>
                </div>
            <div class="card card_responsive">
                <img src="{{asset('images/book_colection/Komet_Minor.jpg')}}" class="card-img-top"  alt="...">
            <div class="card-body">
                <p class="card-title">Komet Minor</p>
                <a href="/detail">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                    </button>
                     <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                </p>
                </a>
            </div>
        </div>
        <div class="card card_responsive">
            <img src="{{asset('images/book_colection/orang-orang-biasa.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Orang-orang Biasa</p>
                <a href="/detail">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                        </button>
                         <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                    </p>
                </a>
            </div>
        </div>
        <div class="card card_responsive">
            <img src="{{asset('images/book_colection/the-power-of-habit.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Habit</p>
                <a href="/detail">
                    <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                            Lihat detail....
                        </button>
                         <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
                            </button>
                    </p>
                </a>
            </div>
        </div>
            <div class="card card_responsive">
                <img src="{{asset('images/book_colection/kisah-tanah-jawa.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">Kisah Tanah Jawa</p>
                    <a href="/detail">
                        <p class="card-text">
                            <button class="btn btn-sm btn-outline-success">
                                Lihat detail....
                            </button>
                             <button class="btn btn-sm">
                                <i class="fa fa-heart" style="color: red; font-size:15px; margin-left: 2px; " aria-hidden="true"></i>
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
