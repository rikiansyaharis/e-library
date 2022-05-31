<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image">

    <title>E-Perpus | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2A3F54">
        <div class="container">
        <a class="navbar-brand text-white" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <form class="form-inline">
                    <input class="form-control mr-sm-2 mx-md-3 my-auto mx" type="search" size="70%" placeholder="Cari.." aria-label="Search">

                </form>
            </ul>
        <div class="dropdown">
            <a class="btn text-white dropdown-toggle btn-sm " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
            Nama
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Profil</a>
              <a class="dropdown-item" href="/datapeminjaman">Data Peminjaman</a>
              <a class="dropdown-item" href="/favorit">Favorite</a>
              <a class="dropdown-item" href="#">History</a>

              <hr>
              <a class="dropdown-item" href="/"><i class="fa fa-sign-out pull-right mt-1"></i>Log out</a>
            </div>
          </div>
        </div>
    </div>
</nav>


    @yield('content-user')


    <!-- Footer -->
    <footer class="text-white pt-5 pb-4 " style="background-color: #2A3F54; margin-top:140px">
        <div class="container text-md-left">
            <div class="row  text-md-left">
                <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mt-2">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-center">E-Perpus</h5>
                    <p class="text-center">E-Perpus adalah perpustakaan digital yang menyediakan informasi dari setiap buku dari perpustakaan aslinya. e-perpus juga menyediakan layanan untuk membaca buku secara online dan digital.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Link</h5>
                    <p>
                        <a href="https://www.blogger.com" class="text-white" style="text-decoration: none;">Blog</a>
                    </p>
                    <p>
                        <a href="" class="text-white" style="text-decoration: none;">Contact Me</a>
                    </p>
                    <p>
                        <a href="https://fontawesome.com/ " class="text-white" style="text-decoration: none;">Font Awesome</a>
                    </p>
                    <p>
                        <a href="https://termify.io/" class="text-white" style="text-decoration: none;">Terms of Service</a>
                    </p>

                </div>

                <div class="col-md-2 col-lg-2 col-xl-1 mx-auto mt-2">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Tutorial</h5>
                    <p>
                        <a href="https://laravel.com/docs/9.x" class="text-white" style="text-decoration: none;">Laravel</a>
                    </p>
                    <p>
                        <a href="https://getbootstrap.com/docs/" class="text-white" style="text-decoration: none;">Bootstrap</a>
                    </p>
                    <p>
                        <a href="https://github.com/" class="text-white" style="text-decoration: none;">Github</a>
                    </p>
                    <p>
                        <a href="https://www.gramedia.com/" class="text-white" style="text-decoration: none;">E-Book</a>
                    </p>
                </div>

                <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mt-2">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fa fa-paw mr-3"></i> E-Perpus
                    </p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> perpus.digital@gmail.com
                    </p>
                    <p>
                        <i class="fa fa-print mr-3"></i> +16 8123456789
                    </p>
                    <p>
                        <i class="fa fa-map-marker mr-3"></i> Banyuwangi
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>
                        Copyright ©2022 All Rights Reserved By:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-warning">
                                E-Perpus
                            </strong>
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </footer>
<!-- End Footer -->


    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Datatables -->
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }} "></script>
<script src="{{ asset('vendors/jszip/dist/jszip.min.js') }} "></script>
<script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }} "></script>
<script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }} "></script>


<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>

</body>
</html>
