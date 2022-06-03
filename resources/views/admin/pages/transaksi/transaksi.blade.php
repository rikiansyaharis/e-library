@extends('admin.layouts.layout')

@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Transaksi</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="id-buku">Kode Buku<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="id-buku" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama Anggota<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="nama" name="nama" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama Petugas<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="nama" name="nama" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Judul-buku" class="col-form-label col-md-3 col-sm-3 label-align">Judul buku</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Judul-buku" class="form-control" type="text" name="Judul-buku">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Tanggal-pinjam" class="col-form-label col-md-3 col-sm-3 label-align">Tanggal pinjam</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Tanggal-pinjam" class="form-control" type="text" name="Tanggal-pinjam" placeholder="26-05-2022" readonly>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Tanggal-pinjam" class="col-form-label col-md-3 col-sm-3 label-align">Tanggal kembali</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Tanggal-pinjam" class="form-control" type="text" name="Tanggal-pinjam" placeholder="30-05-2022" readonly>
                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
