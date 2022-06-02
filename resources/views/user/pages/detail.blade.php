@extends('user.layouts.top-bar')

@section('content-user')
<div class="container">
    <div class="right_col" role="main">
        <div class="card text-center">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="card mb-3 mt-3" >
                        <div class="row no-gutters">
                            <div class="d-flex justify-content-start">
                                <div class="col-md-4">
                                    <img src="{{asset('images/book_colection/Tia.jpg')}}" width="270px" height="340px"  alt="...">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-left">Judul Buku : Tia</h5>
                                    <p class="card-text text-left">Penerbit : Gramedia Pustaka Utama</p>
                                    <p class="card-text text-left">Penulis : kembangmanggis</p>
                                    <p class="card-text text-left">Tahun Terbit : 2019</p>
                                    <p class="card-text text-left">Jumlah Halaman : 427</p>
                                    <p class="card-text text-left">Deskripsi : Tia, seorang gadis SMA kelas dua, menatap kehidupan dengan penuh ironi. Kedewasaan adalah penghapusan sekian banyak kenikmatan hidup, begitu selalu pendapatnya. Namun tentu saja dia tidak dapat menahan perputaran dunia. Hukum alam berlaku pada setiap manusia, termasuk Tia, yang sejak awal tegas-tegas menolaknya. Di saat dia tengah memasuki arti kedewasaan itu sendiri, Tia sama sekali tidak menyadarinya. Alam telah menjeratnya dengan amat halus, mengantar gadis itu ke dunia barunya tanpa penolakan lagi. Tia kini telah siap menyongsong fajar dengan mata dan hati terbuka. Dia berhasil menembus pintu kedewasaan itu lewat uluran tangan gaib yang menolongnya. Apa lagi kalau bukan tangan-tangan gaib cinta?</p>
                                    <p class="card-text text-left"></p>
                                    <a href="#" class="btn btn-primary">Baca Buku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
