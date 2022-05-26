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
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td >
                                        <a href="#">Edit</a> |
                                        <a href="#">Hapus</a> |
                                        <a href="#">Print</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td>
                                        <a href="#">Edit</a> |
                                        <a href="#">Hapus</a> |
                                        <a href="#">Print</a>
                                    </td>
                                </tr>
                                
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