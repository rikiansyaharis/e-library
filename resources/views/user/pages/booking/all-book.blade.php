@extends('user.layouts.top-bar')

@section('content')

<!-- Content -->

<div class="container">

<div class="grid-list-product-wrapper">
    <div class="product-grid product-view pb-20">
        <div class="row">
            @foreach ($buku as $bookview)

            <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ptb-30">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="{{asset('images/book_colection/' . $bookview->foto_buku)}}">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">{{$bookview->nama_buku}}</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">Lihat Detail</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>{{ $bookview->penulis_buku }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

