<?php
session_start();
if (isset($_SESSION['user'])) {
  header("location:app/index.php");
  exit();
} else {
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin Digitalent</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminLTE/plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="adminLTE/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="adminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  </head>


  <body class="hold-transition login-page">
    <img src="https://kampusmerdeka.kemdikbud.go.id/web/assets/img/logo-kampus-merdeka.png" alt="" width="300">
    <div class="login-box mt-4" style="width: 500px;">
      <!-- /.login-logo -->

      <div class="card card-primary accent-blue">
        <div class="card-header text-center">
          <h1 class="mt-2">Kampuskuaja.ac.id</h1>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Silahkan Login</p>

          <form action="app/login/auth.php" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div> -->
              <!-- /.col -->
              <div class="col">
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <!-- <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
          </div> -->
          <!-- /.social-auth-links -->

          <!-- <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a> -->
          </p>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="adminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="adminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminLTE/dist/js/adminlte.min.js"></script>
  </body>

  <?php
  if (isset($_GET['error'])) {

    $error = $_GET['error'];
    if ($error == 1) {
      echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Login gagal, silahkan cek kembali Username atau Password Anda'
    })
  </script>
  ";
    } elseif ($error == 2) {
      echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'error',
      title: 'Mohon isi Username dan Password'
    })
  </script>
    ";
    }
  }

  ?>



</html>
<?php
}
?>
