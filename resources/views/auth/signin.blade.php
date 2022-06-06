<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image">

    <title>E-Perpus</title>

    <!-- Bootstrap -->
    <link href=" {{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href=" {{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" {{ asset('build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{ route('signin') }}" method="POST">
              <h1>Login e-Perpus</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="/home">Masuk</a>
                <a class="reset_pass" href="#">lupa password?</a>
              </div>
              <a href="/dashboard">ke user</a>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum punya akun?
                  <a href="#signup" class="to_register"> Daftar  </a>
                </p>


                <div class="clearfix"></div>
                <br/>

                <div>
                  <h1><img src="{{ asset('images/icon.png') }}" class="logo" width="250px"></img> </h1>
                  <p>©2022 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="{{ route('register') }}" method="POST">
              @csrf
              <h1>Daftar</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Nama" required="" />
              </div>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah punya akun?
                  <a href="#signin" class="to_register"> Masuk </a>
                </p>


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="{{ asset('images/icon.png') }}" class="logo" width="250px"></img> </h1>
                  <p>©2022 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
