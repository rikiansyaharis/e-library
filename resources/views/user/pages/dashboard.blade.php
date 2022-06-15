@extends('user.layouts.top-bar')

@section('content')



<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h3>WELCOME TO E-BOOK</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- blog-area start -->
<div class="blog-page-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9 col-md-8">
                <div class="blog-wrapper">
                    <div class="single-blog-wrapper mb-40">
                        <div class="blog-img mb-30">
                            <div class="blog-gallery-slider owl-carousel mb-30">
                                <a href="#"><img alt="" src="{{ asset('assets/img/slider1.jpg') }}"></a>
                                <a href="#"><img alt="" src="{{ asset('assets/img/slider2.jpg') }}"></a>
                                <a href="#"><img alt="" src="{{ asset('assets/img/slider3.jpg') }}"></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h2><a href="blog-details-standerd.html">Various types of books are available here</a></h2>
                            <div class="blog-date-categori">
                                <ul>
                                    <li> 11 Juni 2022 </li>
                                    <li><a href="/dashboard">Home </a></li>
                                </ul>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <div class="blog-btn-social mt-30">
                            <div class="blog-social">
                                <span>share :</span>
                                <ul>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="product-area bg-image-1 pt-90 pb-95">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 style="font-family: poppins"> Rekomendasi Untukmu </h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="/all-book">
                                        <h5 class="mt-3">Lihat Semua </h5>
                                    </a>
                                </div>
                            </div>


                            <div class="featured-product-active hot-flower owl-carousel product-nav">
                                @foreach ($buku as $listbook)
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="{{asset('images/book_colection/' . $listbook->foto_buku)}}"  >
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="#" title="Add To Favorite">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <div class="product-hover-style">
                                            <div class="product-title">
                                                <h4>
                                                    <a href="product-details.html">{{ $listbook->nama_buku }}</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4><a href="/detail">Lihat Detail</a></h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>{{ $listbook->penulis_buku }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <div class="product-area bg-image-1 pt-10 pb-95">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 style="font-family: poppins"> Populer </h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="">
                                        <h5 class="mt-3 ">Lihat Semua </h5>
                                    </a>
                                </div>
                            </div>
                            <div class="featured-product-active hot-flower owl-carousel product-nav">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="">
                                            <img alt="" src="{{asset('images/book_colection/dongeng-anak-nusantara-pilihan.jpg')}}">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="#" title="Add To Favorite">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <div class="product-hover-style">
                                            <div class="product-title">
                                                <h4>
                                                    <a href="/detail">Dongeng Anak Nusantara</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4><a href="/detail">Lihat Detail</a></h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>Gramedia</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <div class="product-area bg-image-1 pt-10 pb-95">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 style="font-family: poppins"> Baca Online </h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="">
                                        <h5 class="mt-3">Lihat Semua </h5>
                                    </a>
                                </div>
                            </div>

                            <div class="featured-product-active hot-flower owl-carousel product-nav">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="{{asset('images/book_colection/KKN.jpg')}}">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="#" title="Add To Favorite">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-left">
                                        <div class="product-hover-style">
                                            <div class="product-title">
                                                <h4>
                                                    <a href="/onlinebook">KKN Di Desa Penari</a>
                                                </h4>
                                            </div>
                                            <div class="cart-hover">
                                                <h4><a href="/onlinebook">Lihat Detail</a></h4>
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <span>Gramedia</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Content -->
                </div>
            </div>

            <!-- Right SideBar -->
            <div class="col-lg-4 col-xl-3 col-md-4">
                <div class="blog-sidebar-wrapper sidebar-mrg">
                    <div class="blog-widget mb-50">
                        <div class="blog-search">
                            <form class="news-form" action="/search" method="GET">
                                <input type="search" name="search" placeholder="Search.....">
                                <button type="submit">
                                    <i class="ion-ios-search-strong"></i>
                                </button>
                            </form>
                        </div>
                    </div>


                    <!-- New Post -->
                    <div class="blog-widget mb-45">
                        <h4 class="blog-widget-title mb-25">Recent post</h4>
                        @foreach ($new_add as $add)
                        <div class="blog-recent-post">
                            <div class="recent-post-wrapper mb-25">
                                <div class="recent-post-img">
                                    <a href="#"><img src="{{asset('images/book_colection/'. $add->foto_buku)}}" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h4><a href="#">{{$add->nama_buku}}</a></h4>
                                    <span>{{$add->penulis_buku}}</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        @endforeach
                    </div>
                    <!-- End New Post -->
                    <div class="blog-widget mb-40">
                        <h4 class="blog-widget-title mb-25">categories</h4>
                        <div class="blog-categori">
                            <ul>
                                <li><a href="#">All</a></li>
                                @foreach (getGenre() as $genre)
                                <li><a href="{{ route('genre', $genre->nama_genre)}}">{{$genre->nama_genre}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="blog-widget mb-35">
                        <h4 class="blog-widget-title mb-30">Product</h4>
                        <div class="blog-instagram">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                @foreach ($new_add as $img)
                                <div class="col-md-4 p-2">
                                    <img src="{{ asset('images/book_colection/' . $img->foto_buku)}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="blog-widget mb-35">
                        <h4 class="blog-widget-title mb-20">follow us </h4>
                        <div class="blog-sidebar-social">
                            <ul>
                                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-widget">
                        <h4 class="blog-widget-title mb-25">tags</h4>
                        <div class="blog-tags">
                            <ul>
                                <li><a href="#">E-Book </a></li>
                                <li><a href="#">E-Library </a></li>
                                <li><a href="#">Github </a></li>
                                <li><a href="#">Laravel  </a></li>
                                <li><a href="#">Javascript </a></li>
                                <li><a href="#">Vue Js </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area end -->

<!-- About Us Area Start -->
<section id="about">
    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="overview-content-2">
                        <h4>Hi, everyone</h4>
                        <h2>E-Book!</h2>
                        <p class="peragraph-blog">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, praesentium quam quas expedita sequi aliquid deleniti blanditiis error numquam facilis ut, vitae officia tenetur et? Sit neque, quasi reprehenderit consequatur aliquid aliquam accusamus veniam aspernatur? Nobis nihil quasi voluptatibus quidem eveniet, ex magnam corrupti repellendus quas accusamus.</p>
                        <p> Modi, aliquam! Unde ad libero qui assumenda commodi consequuntur mollitia temporibus officiis placeat earum provident quos nobis, aliquam omnis doloremque, ducimus repellendus dolores eveniet pariatur aut recusandae, impedit vero culpa sunt. Sapiente assumenda itaque dicta placeat reprehenderit adipisci, voluptate amet rerum, quas sit laborum magnam vero pariatur voluptatum a deserunt eveniet, possimus repellendus?</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="overview-img text-center">
                        <a href="#">
                            <img src="{{asset('images/pexels-photo-3847621.webp')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End -->


@endsection
