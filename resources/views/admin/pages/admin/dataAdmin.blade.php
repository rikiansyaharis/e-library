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
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" >
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
                                        
                                        <td>{{$us->id}}</td>
                                        <td>{{$us->nip}}</td>
                                        <td>{{$us->nama_petugas}}</td>
                                        <td>{{$us->jabatan}}</td>
                                        <td>{{$us->email}}</td>
                                        <td>{{$us->nomor}}</td>
                                        <td class="text-center">
                                            <a href="/updateadmin/{{$us->id}}">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>

                                           <a href="/deleteadmin/{{$us->id}}" onclick="return confirm('Hapus?');">
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
                            <a href="/formAdmin">
                                <button class="btn btn-outline-success btn-sm ml-3 col-sm-2">Tambah
                                    <i class="fa fa-plus" ></i>
                                </button>
                            </a>
{{--
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{$message}}
                                </div>
                            @endif  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
