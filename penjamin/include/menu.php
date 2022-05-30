 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="../admin/img/img_penjamin/<?= $foto ?>" class="img-circle" alt="User Image">
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
           <i class="fa fa-book"></i> <span>Data Dokumen</span> <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="?page=dok_pj/dok_pj.php"><i class="fa fa-circle-o"></i> Dokumen Penjamin Proses</a></li>
         </ul>
         <ul class="treeview-menu">
           <li><a href="?page=dok_pj/detail_pj.php"><i class="fa fa-circle-o"></i> Dokumen Penjamin Selesai</a></li>
         </ul>
       </li>
       <li>
         <a href="?page=user/user.php">
           <i class="fa fa-user"></i> <span>Setting User</span>
         </a>
       </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>