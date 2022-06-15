@extends('user.layouts.top-bar')

@section('content')

<!-- shopping-cart-area start -->
        <div class="cart-main-area ptb-50">
            <div class="container">
                <h3 class="page-title text-center">History</h3>
                <div class="row center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table align="center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Buku</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="product-name"><a href="#">KKN Di Desa Penari </a></td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="product-name"><a href="#">KKN Di Desa Penari </a></td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="product-name"><a href="#">KKN Di Desa Penari </a></td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="product-name"><a href="#">KKN Di Desa Penari </a></td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="product-name"><a href="#">KKN Di Desa Penari </a></td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                           </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class="pt-10 text-center">
                            <a href="/dashboard">
                                <button class="btn btn-sm btn-primary">Kembali</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
