<?php
include '../admin/include/config.php';
// error_reporting(0);
session_start();

$username = $_SESSION['username'];
$id_pegawai = $_SESSION['id_pegawai'];
$status = $_SESSION['status'];
$status_akun = $_SESSION['status_akun'];

$hml = mysqli_query($db, "SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai' ");
$ambil_pegawai = mysqli_fetch_assoc($hml);
$foto = $ambil_pegawai['foto'];
$nama_pegawai = $ambil_pegawai['nama_pegawai'];
$jabatan = $ambil_pegawai['jabatan'];

if ($jabatan == "ks") {
  $jabatan = "Kepala Seksi";
} elseif ($jabatan == "kk") {
  $jabatan = "Kepala Kantor";
} elseif ($jabatan == "pf") {
  $jabatan = "Pejabat Fungsional";
} elseif ($jabatan == "p") {
  $jabatan = "Pelaksana";
}

if ($status_akun != "aktif") {
  header("Location: ../");
  if ($status != "Pegawai") {
    header("Location: ../");
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perbend | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome-4.4.0/css/font-awesome.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- DataTable -->
  <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap.css">
  <style>
    /*jssor slider loading skin double-tail-spin css*/
    .jssorl-004-double-tail-spin img {
      animation-name: jssorl-004-double-tail-spin;
      animation-duration: 1.6s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
    }

    @keyframes jssorl-004-double-tail-spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    /*jssor slider bullet skin 031 css*/
    .jssorb031 {
      position: absolute;
    }

    .jssorb031 .i {
      position: absolute;
      cursor: pointer;
    }

    .jssorb031 .i .b {
      fill: #000;
      fill-opacity: 0.6;
      stroke: #fff;
      stroke-width: 1600;
      stroke-miterlimit: 10;
      stroke-opacity: 0.8;
    }

    .jssorb031 .i:hover .b {
      fill: #fff;
      fill-opacity: 1;
      stroke: #000;
      stroke-opacity: 1;
    }

    .jssorb031 .iav .b {
      fill: #fff;
      stroke: #000;
      stroke-width: 1600;
      fill-opacity: .6;
    }

    .jssorb031 .i.idn {
      opacity: .3;
    }

    /*jssor slider arrow skin 051 css*/
    .jssora051 {
      display: block;
      position: absolute;
      cursor: pointer;
    }

    .jssora051 .a {
      fill: none;
      stroke: #fff;
      stroke-width: 360;
      stroke-miterlimit: 10;
    }

    .jssora051:hover {
      opacity: .8;
    }

    .jssora051.jssora051dn {
      opacity: .5;
    }

    .jssora051.jssora051ds {
      opacity: .3;
      pointer-events: none;
    }
  </style>
</head>

<body class="hold-transition skin-yellow sidebar-mini">
  <div class="wrapper">

    <?php
    include 'include/header.php';

    //Left side column. contains the logo and sidebar
    include 'include/menu.php';
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php
        $page = $_GET['page'];
        if (!isset($page)) {
          include 'include/content.php';
        } else {
          include 'include/' . $page;
        }
        ?>

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
    require 'include/footer.php';
    ?>

  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.4 -->
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jQueryUI/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.5 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="plugins/select2/select2.full.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- datepicker -->
  <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <script src="../admin/plugins/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
  <script src="../admin/plugins/main.js" type="text/javascript"></script>
  <script type="text/javascript">
    jssor_1_slider_init();
  </script>
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      //Initialize Select2 Elements
      $(".select2").select2();
      //Initialize datepicker Elements
      $("#datepicker").datepicker();
    });
  </script>
</body>

</html>