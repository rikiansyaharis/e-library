<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{asset('images/logo.png')}}" type="image">

<title>E-Perpus </title>

<!-- all css here -->
<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/chosen.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>

<body>

    <!-- header start -->
    <header class="header-area gray-bg clearfix" style="background-color: #BDF2D5;">
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="" src="{{asset('images/icon.png')}}" width="140px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-6">
                        <div class="header-bottom-right">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="top-hover"><a href="/dashboard">Home</a>
                                        </li>
                                        <li class="top-hover"><a href="#">Category</a>
                                            <ul class="submenu">
                                                <li><a href="#">All</a></li>
                                                @foreach (getGenre() as $genre)

                                                <li><a href="{{ route('genre', $genre->nama_genre)}}">{{$genre->nama_genre}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#about"> About </a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-currency">
                                <span class="digit">Username<i class="ti-angle-down"></i></span>
                                <div class="dollar-submenu">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="/favorite">Favorite</a></li>
                                        <li><a href="#">Setting</a></li>
                                        <li><a href="/history">History</a></li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <li>
                                                <button class="btn btn-light btn-outline-light text-dark" >
                                                     Log Out
                                                </button>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                                <div class="header-cart">
                                    <a href="#">
                                        <div class="cart-icon">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                    </a>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" width="60px" src="{{asset('images/book_colection/KKN.jpg')}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">KKN </a></h4>
                                                    <span>Simpleman</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" width="60px" src="{{asset('images/book_colection/KKN.jpg')}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">KKN</a></h4>
                                                    <span>Simpleman</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Total : <span class="shop-total">2</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsive area -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">Category</a>
                                    <ul>
                                        <li><a href="#">All</a></li>
                                        @foreach (getGenre() as $genre)
                                        <li><a href="{{ route('genre', $genre->nama_genre)}}">{{$genre->nama_genre}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#about">About us </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Responsive area -->
            </div>
        </div>
    </header>
    <!-- header end -->


            @yield('content')

			<!-- Footer style Start -->
			<footer class="footer-area pt-75 gray-bg-3" style="background-color: #BDF2D5;">
				<div class="footer-top gray-bg-3 pb-35" style="background-color: #BDF2D5;">
					<div class="container ">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget mb-40">
									<div class="footer-title mb-25">
										<h4>My Account</h4>
									</div>
									<div class="footer-content">
										<ul>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="about-us.html">Order History</a></li>
											<li><a href="wishlist.html">WishList</a></li>
											<li><a href="#">Newsletter</a></li>
											<li><a href="about-us.html">Order History</a></li>
											<li><a href="#">International Orders</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget mb-40">
									<div class="footer-title mb-25">
										<h4>Information</h4>
									</div>
									<div class="footer-content">
										<ul>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="#">Delivery Information</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Terms & Conditions</a></li>
											<li><a href="#">Customer Service</a></li>
											<li><a href="#">Return Policy</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget mb-40">
									<div class="footer-title mb-25">
										<h4>Quick Links</h4>
									</div>
									<div class="footer-content">
										<ul>
											<li><a href="#">Support Center</a></li>
											<li><a href="#">Term & Conditions</a></li>
											<li><a href="#">Shipping</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Help</a></li>
											<li><a href="#">FAQS</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget footer-widget-red footer-black-color mb-40">
									<div class="footer-title mb-25">
										<h4>Contact Us</h4>
									</div>
									<div class="footer-about">
										<p>Your current address goes to here,120 haka, angladesh</p>
										<div class="footer-contact mt-20">
											<ul>
												<li>(+008) 254 254 254 25487</li>
												<li>(+009) 358 587 657 6985</li>
											</ul>
										</div>
										<div class="footer-contact mt-20">
											<ul>
												<li>yourmail@example.com</li>
												<li>example@admin.com</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer style End -->

		</div>

<script src="{{asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</body>
</html>
