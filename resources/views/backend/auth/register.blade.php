<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ruft Blog | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Ruft</b> Blog</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="">
        @csrf 

        <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Enter your Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-2">
          <input type="email" class="form-control" placeholder="Enter your Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-2">
          <input type="password" class="form-control" placeholder="Enter your Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-2">
          <input type="password" class="form-control" placeholder="Retype your password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="icheck-primary mb-3">
          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
          <label for="agreeTerms">
           I agree to the <a href="#">terms & conditions</a>
          </label>
        </div>

        <div class="input-group mb-2">
            <button type="submit" class="btn btn-secondary btn-block">Register</button>
        </div>
      </form>

      <p class="text-center">I already have a membership. <a href="" class="text-center">Try Login</a></p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend') }}/dist/js/adminlte.min.js"></script>
</body>
</html>
