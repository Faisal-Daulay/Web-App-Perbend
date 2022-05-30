<h1 class="box-title" align="center">
   <i class="fa fa-inbox"></i> Data User
</h1>
<table border="1">
   <thead>
      <tr>
         <th>No</th>
         <th>Username</th>
         <th>Password</th>
         <th>Status</th>
         <th>Status Akun</th>
      </tr>
   </thead>
   <tbody>
      <?php
      include '../config.php';
      $sql = "SELECT * FROM user";
      $query = mysqli_query($db, $sql);
      $no = 1;
      while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
         $id = $ambil['id_user'];
         $user = $ambil['username'];
         $password = $ambil['password'];
         $status_akun = $ambil['status_akun'];
         $status = $ambil['status'];

         header("Content-type: application/vnd-ms-excel");
         header("Content-Disposition: attachment; filename=Data User.xls");
      ?>
         <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $user; ?></td>
            <td><?php echo md5($password); ?></td>
            <td><?php echo $status; ?></td>
            <td><?php echo $status_akun; ?></td>
         </tr>
      <?php
      }
      mysqli_close($db);
      ?>
   </tbody>
</table>