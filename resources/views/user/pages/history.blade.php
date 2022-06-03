@extends('user.layouts.top-bar')

@section('content-user')

<div class="container">
    <div class="col-md-12 col-sm-12 mt-5">
        <div class="x_panel">
            <div class="x_title">
                    <h3 class="text-center">History</h3>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Nama</th>
                                            <th>Judul</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userHistory as $historyU)

                                        <tr>
                                            <td>{{$historyU['time']}}</td>
                                            <td>{{$historyU['namaAnggota']}}</td>
                                            <td>{{$historyU['judul']}}</td>
                                            <td >
                                            <a href="/hapusHistory" onclick="return confirm('Hapus?');">Hapus</a> |
                                        </td>
                                    </tr>

                                    @endforeach
                                    </tbody>                  
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
