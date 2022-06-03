@extends('admin.layouts.layout')

@section('content')
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                        <h3>Data Pengguna</h3>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>No.Hp</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                 <tbody>
                                     @foreach ($dataUser as $us)

                                     <tr>
                                         <td>{{$us->nama_anggota}}</td>
                                         <td>{{$us->jenis_kelamin}}</td>
                                         <td>{{$us->alamat}}</td>
                                         <td>{{$us->email}}</td>
                                         <td>{{$us->nomor}}</td>
                                         <td >
                                            <a href="#">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="#" onclick="return confirm('Hapus?');">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </a> 
                                        </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                            </table>
                            <hr>
                            <button class="btn btn-outline-success ml-3 col-sm-2">Tambah
                                <i class="fa fa-plus"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
