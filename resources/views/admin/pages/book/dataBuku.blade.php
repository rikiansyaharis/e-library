@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="page-title">
          <div class="title_left">
            <h3>Koleksi</h3>
          </div>

          <div class="title_right">
            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary text-white" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <h5>Top Trending</h5>
          <a href="">
            <button class="btn btn-sm btn-outline-success pull-right"> Tambah buku
              <i class="fa fa-plus"></i>
            </button>
          </a>
        <div class="x_content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-deck">

                @foreach ($buku as $lt)
                <div class="card">
                  <img src="{{asset('images/book_colection/' . $lt['foto_buku'])}} " class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">{{ $lt['judul_buku'] }}</h6>
                    <a href="/detailbukuadmin/{{ $lt['id'] }}">
                      <p class="card-text">
                        <button class="btn btn-sm btn-outline-success">
                          Lihat detail....
                        </button>
                      </p>
                    </a>
                    <a href="">
                      <button class="btn btn-sm btn-outline-primary">Edit</button>
                    </a>
                    <a href="">
                      <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus?');">Hapus</button>
                    </a>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
    </div>
  </div>
</div>

@endsection
