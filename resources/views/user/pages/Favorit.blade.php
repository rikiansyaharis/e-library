@extends('user.layouts.top-bar')

@section('content-user')

<div class="container">
    <h2 class="text-center mt-5">Favorit</h2>
    <div class="d-flex justify-content-center">

        <div class="card mb-3 mt-3" style="max-width: 540px;" >
            <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset('images/book_colection/tia.jpg')}}" width="150px" height="220px"  alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <hr>
            <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset('images/book_colection/tia.jpg')}}" width="150px" height="220px"  alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <hr>
            <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset('images/book_colection/tia.jpg')}}" width="150px" height="220px"  alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
        </div>

    </div>
</div>


@endsection
