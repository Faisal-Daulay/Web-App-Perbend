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
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/square/blue.css">
  <!-- Custome style -->
  <!-- <link rel="stylesheet" href="dist/css/login.css"> -->

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b>Registrasi</b><br />Penjamin</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body" id="wrapper">
      <p class="login-box-msg">Sign up to start your session</p>
      <form action="regis_pro_penjamin.php" method="post" enctype="multipart/form-data">
        <?php
        $aksi = 'tambah';
        ?>
        <input type="hidden" name="aksi" value="<?= $aksi ?>">
        <div class='form-group'>
          <label>Nama Penjamin</label>
          <input type='text' required name='nama_penjamin' class='form-control' placeholder='Nama Pengguna Jasa'>
        </div>
        <div class='form-group'>
          <label>Email</label>
          <input type='email' required name='email' class='form-control' placeholder='Email'>
        </div>
        <div class='form-group'>
          <label>Nik</label>
          <input type='text' required name='nik' class='form-control' placeholder='Nik'>
        </div>
        <div class='form-group'>
          <label>NPWP</label>
          <input type='text' required name='npwp' class='form-control' placeholder='NPWP'>
        </div>
        <div class='form-group'>
          <label>Perusahaan</label>
          <input type='text' required name='perusahaan' class='form-control' placeholder='Perusahaan'>
        </div>
        <div class='form-group'>
          <label>Alamat</label>
          <textarea name='alamat' required class='form-control' rows='4'></textarea>
        </div>
        <div class='form-group'>
          <label>Telepon</label>
          <input type='text' required name='telepon' class='form-control' placeholder='Telepon'>
        </div>
        <div class='form-group'>
          <label>Username</label>
          <input type='text' required name='user' class='form-control' placeholder='Username'>
        </div>
        <div class='form-group'>
          <label>Password</label>
          <input type='password' required name='pass' class='form-control' placeholder='Password'>
        </div>
        <div class='form-group'>
          <label>Upload Foto Pengguna Jasa</label>
          <input type='file' required name='foto' class='form-control'>
        </div>   
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-xs-4">
            <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign Up">
          </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-xs-12">
            <a href="regis_pegawai.php" class="btn btn-success btn-block btn-flat">Register Pegawai</a>
          </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-xs-12">
            <a href="regis_pj.php" class="btn btn-success btn-block btn-flat">Register Pengguna Jasa</a>
          </div>
        </div>
        <a href="../">Saya sudah punya akun!</a>
      </form>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.4 -->
  <script src="../../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>