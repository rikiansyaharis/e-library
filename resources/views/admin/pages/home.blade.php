@extends('admin.layouts.layout')

@section('content')

  <!-- page content -->
    <div class="right_col" role="main">
    <!-- top tiles -->
      <div class="row">
        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6  ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-user"></i>
            </div>
            <div class="count">12</div>
            <h4>Data Penguna</h4>
          </div>
        </div>

        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6  ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-book"></i>
            </div>
            <div class="count">100</div>
            <h4>Judul buku</h4>
          </div>
        </div>

        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon"><i class="fab fa-album-collection"></i>
                </div>
                <div class="count">10</div>
                <h4>Data Genre</h4>
            </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-caret-square-o-left"></i>
            </div>
            <div class="count">10</div>
            <h4>Belum dikembalikan</h4>
          </div>
        </div>

        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o"></i>
            </div>
            <div class="count">0  
            </div>
            <h4 class="text-center">Dipinjam</h4>
          </div>
        </div>

        
    </div>
    <h2>Daftar Buku</h2>
</div>
  <!-- /page content -->

@endsection
