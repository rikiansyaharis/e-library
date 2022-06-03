@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                    <h3>Data Pengurus</h3>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <form method="POST" action="{{$action}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm border-ra" name="id"  id="id" {{ isset($updateadmin) ? $updateadmin->id : '' }} hidden readonly>
                            </div>
                            <div class="form-group">
                                <label for="NIP">NIP</label>
                                <input type="text" class="form-control form-control-sm" name="nip" id="NIP" required value="{{ isset($updateadmin) ? $updateadmin->nip : '' }}">
                            </div>
                            <div class="form-group" >
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control form-control-sm" name="nama_petugas" id="Nama" required value="{{ isset($updateadmin) ? $updateadmin->nama_petugas : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="Jabatan">Jabatan</label>
                                <input type="text" class="form-control form-control-sm" name="jabatan" id="Jabatan" required value="{{ isset($updateadmin) ? $updateadmin->jabatan : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" required value="{{ isset($updateadmin) ? $updateadmin->email : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="nomor">No. Hp</label>
                                <input type="text" class="form-control form-control-sm" name="nomor" id="Nomor" required value="{{ isset($updateadmin) ? $updateadmin->nomor : '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

                            <a href="/dataadmin">
                                <button type="button" class="btn btn-secondary btn-sm">Close</button>
                            </a>
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
