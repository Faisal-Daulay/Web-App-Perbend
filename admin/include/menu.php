 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p style="text-transform: capitalize;"><strong><?= $username ?></strong></p>
         <?= $status; ?>
       </div>
     </div>
     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
       <li class="header">MAIN NAVIGATION</li>
       <li>
         <a href="index.php">
           <i class="fa fa-dashboard"></i> <span>Dashboard</span>
         </a>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-book"></i> <span>Data Master</span> <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="?page=pegawai/pegawai.php"><i class="fa fa-circle-o"></i> Pegawai</a></li>
           <li><a href="?page=penjamin/penjamin.php"><i class="fa fa-circle-o"></i> Penjamin</a></li>
           <li><a href="?page=pj/pj.php"><i class="fa fa-circle-o"></i> Pengguna Jasa</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-book"></i> <span>Data Dokumen</span> <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="?page=dok_pj/dok_pj.php"><i class="fa fa-circle-o"></i> Dokumen Pengguna Jasa</a></li>
           <li><a href="?page=dok_penjamin/dok_penjamin.php"><i class="fa fa-circle-o"></i> Dokumen Penjamin</a></li>
           <li><a href="?page=dok_pegawai/dok_pegawai.php"><i class="fa fa-circle-o"></i> Dokumen Pegawai</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-book"></i> <span>Dokumen Status</span> <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="?page=dok_pj/dok_pj.php&proses=1"><i class="fa fa-circle-o"></i> Status Proses</a></li>
           <li><a href="?page=dok_pj/dok_pj.php&proses=2"><i class="fa fa-circle-o"></i> Status Selesai</a></li>
         </ul>
       </li>
       <li><a href="?page=info/info.php"><i class="fa fa-gears"></i> Info</a></li>
       <li><a href="?page=slider/slider.php"><i class="fa fa-gears"></i> Setting Slider</a></li>
       <li><a href="?page=user/user.php"><i class="fa fa-gears"></i> Setting User</a></li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>