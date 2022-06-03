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
                                     @foreach ($dataUser as $user)

                                     <tr>
                                         <td>{{$user->nama_anggota}}</td>
                                         <td>{{$user->jenis_kelamin}}</td>
                                         <td>{{$user->alamat}}</td>
                                         <td>{{$user->email}}</td>
                                         <td>{{$user->nomor}}</td>
                                         <td >
                                            <a href="/updateuser/{{$user->id}}">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="#/deleteuser/{{$user->id}}" onclick="return confirm('Hapus?');">
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
                            <a href="/formUser">
                            <button class="btn btn-outline-success ml-3 col-sm-2">Tambah
                                <i class="fa fa-plus"></i>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
