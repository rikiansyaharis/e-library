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
                            <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NIP</th>
                                    <th>Name</th>
                                    <th>Jabatan</th>
                                    <th>Email</th>
                                    <th>No.Hp</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataAdmin as $us)

                                    <tr>
                                        <td>{{$us['id']}}</td>
                                        <td>{{$us['nip']}}</td>
                                        <td>{{$us['nama_petugas']}}</td>
                                        <td>{{$us['jabatan']}}</td>
                                        <td>{{$us['email']}}</td>
                                        <td>{{$us['nomor']}}</td>
                                        <td >
                                            <a href="" data-toggle="modal" data-target="#exampleModal">Edit</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Masukan data yang valid</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
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
                                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            |
                                           <a href="#" onclick="return confirm('Hapus?');">Hapus</a> |
                                           <a href="#">Print</a>
                                       </td>
                                   </tr>

                                   @endforeach
                                   </tbody>
                            </table>
                            <hr>
                            <a href="/tambahadmin">
                                <button class="btn btn-outline-success ml-3 col-sm-2">Tambah
                                    <i class="fa fa-plus" ></i>
                                </button>
                            </a>
                            <button class="btn btn-outline-primary ml-3 col-sm-2">Cetak
                                <i class="fa fa-print" ></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
