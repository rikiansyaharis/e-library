@extends('user.layouts.top-bar')

@section('content-user')

<div class="container">
    <div class="row" style="margin: 0; margin-top: 100px">
        <div class="col-lg-12">
            <h5 class="py-2">Top Trending</h5>
            <div class="card-deck">
                <div class="card card_responsive">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                                    <a class="dropdown-item" href="#">Lihat Detail</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <img src="{{asset('images/book_colection/tia.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Tia</p>
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
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                                <a class="dropdown-item" href="#">Lihat Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <img src="{{asset('images/book_colection/mindset.jpg')}}" class="card-img-top"  alt="...">
            <div class="card-body">
                <p class="card-title">Mindset</p>
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
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                            <a class="dropdown-item" href="#">Lihat Detail</a>
                        </div>
                    </li>
                </ul>
            </div>
            <img src="{{asset('images/book_colection/senja-dan-pagi.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Senja dan Pagi</p>
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
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                            <a class="dropdown-item" href="#">Lihat Detail</a>
                        </div>
                    </li>
                </ul>
            </div>
            <img src="{{asset('images/book_colection/Wujud-Tanpa-Suara.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Wujud Tanpa Suara</p>
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
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                                <a class="dropdown-item" href="#">Lihat Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <img src="{{asset('images/book_colection/Hyderabad.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">Hyderabad</p>
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

        <div class="col-lg-12">
            <h5 class="py-2 mt-4">Baca Disini</h5>
            <div class="card-deck">
                <div class="card card_responsive">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                                    <a class="dropdown-item" href="#">Lihat Detail</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <img src="{{asset('images/book_colection/Cooking.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Cooking</p>
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
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                                <a class="dropdown-item" href="#">Lihat Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <img src="{{asset('images/book_colection/Komet_Minor.jpg')}}" class="card-img-top"  alt="...">
            <div class="card-body">
                <p class="card-title">Komet Minor</p>
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
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                            <a class="dropdown-item" href="#">Lihat Detail</a>
                        </div>
                    </li>
                </ul>
            </div>
            <img src="{{asset('images/book_colection/orang-orang-biasa.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Orang-orang Biasa</p>
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
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                            <a class="dropdown-item" href="#">Lihat Detail</a>
                        </div>
                    </li>
                </ul>
            </div>
            <img src="{{asset('images/book_colection/the-power-of-habit.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-title">Habit</p>
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
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle fa-pull-left" style="color: black" data-toggle="dropdown" role="button"><i class="fa fa-navicon"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Tambah Ke Favorit</a>
                                <a class="dropdown-item" href="#">Lihat Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <img src="{{asset('images/book_colection/kisah-tanah-jawa.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">Kisah Tanah Jawa</p>
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
