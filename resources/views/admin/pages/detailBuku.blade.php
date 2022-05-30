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
                    @foreach ($detailBuku as $Db)
                            <div class="col-md-4">
                                <img src="{{asset('images/book_colection/tia.jpg')}}" width="270px" height="340px"  alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-left">Judul Buku : {{ $Db ['judul_buku'] }}</h5>
                                <p class="card-text text-left">Penerbit : {{ $Db ['Penerbit'] }} </p>
                                <p class="card-text text-left">Penulis : {{ $Db ['Penulis'] }}</p>
                                <p class="card-text text-left">Tahun Terbit : {{ $Db ['Tahun_Terbit'] }}</p>
                                <p class="card-text text-left">Genre : {{ $Db ['Genre'] }}</p>
                                <p class="card-text text-left">Jumlah Halaman :  {{ $Db ['Jumlah_Halaman'] }}</p>
                                <p class="card-text text-left">Deskripsi : </p>
                                <p class="card-text text-left">
                                    {{ $Db ['Deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
