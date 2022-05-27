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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>No.Hp</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                 <tbody>
                                     @foreach ($dataUser as $us)

                                     <tr>
                                         <td>{{$us['nama']}}</td>
                                         <td>{{$us['email']}}</td>
                                         <td>{{$us['no']}}</td>
                                         <td >
                                             <a href="#">Edit</a> |
                                            <a href="#" onclick="return confirm('Hapus?');">Hapus</a> |
                                            <a href="#">Print</a>
                                        </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                            </table>
                            <hr>
                            <button class="btn btn-outline-success ml-3 col-sm-2">Tambah
                                <i class="fa fa-plus"></i>
                            </button>
                            <button class="btn btn-outline-primary ml-3 col-sm-2">Cetak
                                <i class="fa fa-print"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
