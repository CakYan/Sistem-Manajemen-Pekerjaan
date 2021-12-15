<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/rs.png" type="image/png" />
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  {{-- JS Bundle --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <img src="images/rs.png" width="100px" height="100px">

          <div class="clearfix"></div>
          <div class="separator">
            <div class="clearfix"></div>
          </div>
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
              {{ session('success') }}
              {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>
          @endif

          @if (session()->has('Login Gagal'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
              {{ session('Login Gagal') }}
              {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>
          @endif

          @if (session()->has('alert'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
              {{ session('alert') }}
            </div>
          @endif

          {{-- login form --}}
          <form action="/login_cek" method="POST">
            @csrf
            <h1>Login</h1>
            {{-- username --}}
            <div>
              <input type="text" name="username" class="form-control" @error('username')
                is-invalid @enderror id="username" placeholder="Username" autofocus required=""
                value="{{ old('username') }}" />
              {{-- <label for="username"></label> --}}
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            {{-- username --}}

            {{-- password --}}
            <div>
              <input type="password" name="password" class="form-control" id="password"
                placeholder="Password" required="" />
              <label for="password"></label>
            </div>
            {{-- password --}}

            {{-- button Login --}}
            <div>
              {{-- <a class="btn btn-default submit" href="/home">Masuk</a> --}}
              <button class="btn btn-default submit" style="background-color: gray">Masuk</button>
              <label for="login"></label>
            </div>
            {{-- button Login --}}

            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              {{-- pemisah --}}

              <div>
                <h1>Sistem Manajemen Pekerjaan</h1>
                <p>©2021 PSTI Universitas Aisyiyah Yogyakarta</p>
              </div>
            </div>
          </form>
        </section>
      </div>
</body>

</html>
