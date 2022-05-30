<?php 
  session_start();

  session_destroy();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perbend | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin/plugins/iCheck/square/blue.css">
    <!-- Custome style -->
    <!-- <link rel="stylesheet" href="dist/css/login.css"> -->

  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index.php"><b>Perbend</b><br/>Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body" id="wrapper">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="cek_login.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" required autocomplete="off" class="form-control" name="user" placeholder="Username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" required autocomplete="off" class="form-control" name="pass" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-xs-12">
              <a href="registrasi/regis_pegawai.php" class="btn btn-success btn-block btn-flat">Register Pegawai</a>
            </div>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-xs-12">
              <a href="registrasi/regis_pj.php" class="btn btn-success btn-block btn-flat">Register Pengguna Jasa</a>
            </div>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-xs-12">
              <a href="registrasi/regis_penjamin.php" class="btn btn-success btn-block btn-flat">Register Penjamin</a>
            </div>
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
