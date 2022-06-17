@extends('user.layouts.top-bar')

@section('content')

<!-- shopping-cart-area start -->
        <div class="cart-main-area ptb-50">
            <div class="container">
                <h3 class="page-title text-center">Keranjang</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table align="center">
                                    <thead>
                                        <tr>

                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Nama Buku</th>
                                            <th>Penulis Buku</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)   
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="product-thumbnail">
                                                {{--  {{dd($item->product)}}  --}}
                                                <a href="#"><img src="{{asset('images/book_colection/'. $item->product->foto_buku) }}" width="60px" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$item->product->nama_buku}}</a></td>
                                            <td class="product-price-cart"><span class="amount">{{$item->product->penulis_buku}}</span></td>
                                            <td class="">
                                                <a href="{{route('remove-from-bigcart', $item->id)}}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            {{--  <form action="{{route('remove-from-bigcart', $item->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn product-remove" type="submit">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                                </form>  --}}
                                            </td>
                                        </tr>
                                        @endforeach
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
