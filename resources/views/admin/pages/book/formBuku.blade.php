@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                    <h3>Data Buku </h3>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm border-ra" name="id"  id="id" {{ isset($updateadmin) ? $updateadmin->id : '' }} hidden readonly>
                            </div>
                            <div class="form-group">
                                <label for="Nama">Genre</label>
                                <select class="form-control form-control-sm" name="id__genre"  id="id_genre" {{ isset($updateadmin) ? $updateadmin->id_genre : '' }}>
                                    <option>Umum</option>
                                    <option>Action</option>
                                    <option>Horor</option>
                                    <option>Fantasi</option>
                                    <option>Thriller</option>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label for="Nama">Judul buku</label>
                                <input type="text" class="form-control form-control-sm" name="nama_petugas" id="Nama" required value="{{ isset($updateadmin) ? $updateadmin->nama_buku : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="Jabatan">Penulis</label>
                                <input type="text" class="form-control form-control-sm" name="jabatan" id="Jabatan" required value="{{ isset($updateadmin) ? $updateadmin->penulis_buku : '' }}">
                            </div>
                            <div class="form-group">

                                <label for="Jabatan">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" value="{{ isset($updateadmin) ? $updateadmin->deskripsi : '' }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="file" id="dropify" required>
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

@section('script')

<script>
    $(document).ready(function() {
        $('#dropify').dropify();

    });
</script>

@endsection
