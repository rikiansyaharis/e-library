@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                    <h3>Tambah Data Pengurus</h3>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <form>
                            <div class="form-group">
                            <label for="id">ID</label>
                                <input type="text" class="form-control form-control-sm border-ra" id="id" readonly>
                            </div>
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control form-control-sm" id="Nama">
                            </div>
                            <div class="form-group">
                                <label for="Jabatan">Jabatan</label>
                                <input type="text" class="form-control form-control-sm" id="Jabatan">
                            </div>
                            <div class="form-group">
                                <label for="Emial">Emial</label>
                                <input type="email" class="form-control form-control-sm" id="Emial">
                            </div>
                            <div class="form-group">
                                <label for="nomor">No. Hp</label>
                                <input type="text" class="form-control form-control-sm" id="nomor">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>


@endsection
