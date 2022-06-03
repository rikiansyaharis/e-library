@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <a href="">
        <button class="btn btn-sm btn-primary">Edit</button>
    </a>
    <div class="card text-center">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="card mb-3 mt-3" >
                    <div class="row no-gutters">
                        <div class="d-flex justify-content-start">
                            <div class="col-md-4">
                                <img src="{{asset('images/book_colection/' . $detailBuku['foto_buku'])}}" width="270px" height="340px"  alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-left">Judul Buku : {{ $detailBuku ['nama_buku'] }}</h5>
                                <p class="card-text text-left">Penerbit : {{ $detailBuku ['penerbit_buku'] }} </p>
                                <p class="card-text text-left">Penulis : {{ $detailBuku ['penulis_buku'] }}</p>
                                <p class="card-text text-left">Tahun Terbit : {{ $detailBuku ['tahun_terbit'] }}</p>
                                <p class="card-text text-left">Jumlah Halaman : {{ $detailBuku ['jumlah_halaman'] }}</p>
                                <p class="card-text text-left">Deskripsi : </p>
                                <p class="card-text text-left">
                                    {{ $detailBuku ['deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
