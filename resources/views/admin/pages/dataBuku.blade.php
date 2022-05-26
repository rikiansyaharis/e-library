@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_title">
          <h5>Top Trending</h5>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-deck">

                <div class="card">
                  <img src="{{asset('images/book_colection/Buku-tia.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="">
                      <h5 class="card-title">Tia - Buku Novel</h5>
                    </a>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/book_colection/mindset-1.jpg')}}" class="card-img-top"  alt="...">
                  <div class="card-body">
                    <a href="">
                      <h5 class="card-title">Mindset</h5>
                    </a>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/book_colection/Komet_Minor.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="">
                      <h5 class="card-title">Komet_Minor</h5>
                    </a>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/book_colection/Wujud-Tanpa-Suara-Nurul.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="">  
                      <h5 class="card-title"> Wujud Tanpa Suara</h5>
                    </a>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>  

        <div class="x_title mt-4">
          <h5>Drama</h5>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-deck mt-2">
                <div class="card">
                  <img src="{{asset('images/book_colection/Buku-tia.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="">
                      <h5 class="card-title">Tia - Buku Novel</h5>
                    </a>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/book_colection/mindset-1.jpg')}}" class="card-img-top"  alt="...">
                  <div class="card-body">
                    <a href="">
                      <h5 class="card-title">Mindset</h5>
                    </a>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/book_colection/Komet_Minor.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="">
                      <h5 class="card-title">Komet_Minor</h5>
                    </a>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/book_colection/Wujud-Tanpa-Suara-Nurul.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="">  
                      <h5 class="card-title"> Wujud Tanpa Suara</h5>
                    </a>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>  

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection