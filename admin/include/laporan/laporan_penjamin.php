<h1 class="box-title" align="center">
   <i class="fa fa-inbox"></i> Data Penjamin
</h1>
<div class="table-responsive">
   <table border="1" width="100%" id="example1" class="table table-bordered table-hover">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Penjamin</th>
            <th>Nik</th>
            <th>Perusahaan</th>
            <th>Email</th>
            <th>NPWP</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Tanggal Daftar</th>
         </tr>
      </thead>
      <tbody>
         <?php
         include '../config.php';
         $sql = "SELECT * FROM penjamin ORDER BY id_penjamin DESC";
         $query = mysqli_query($db, $sql);
         $no = 1;
         while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $id_pj = $ambil['id_penjamin'];
            $foto = $ambil['foto'];
            $nama_pj = $ambil['nama_penjamin'];
            $email_p = $ambil['email_p'];
            $nik = $ambil['nik'];
            $npwp = $ambil['npwp'];
            $perusahaan = $ambil['perusahaan'];
            $telepon = $ambil['telepon'];
            $alamat_p = $ambil['alamat_p'];
            $tgl_daftar = $ambil['tgl_daftar'];

            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Data Penjamin.xls");
         ?>
            <tr>
               <td><?php echo $no++; ?></td>
               <td><?php echo $nama_pj; ?></td>
               <td><?php echo $nik; ?></td>
               <td><?php echo $perusahaan; ?></td>
               <td><?php echo $email_p; ?></td>
               <td><?php echo $npwp; ?></td>
               <td><?php echo $alamat_p; ?></td>
               <td><?php echo $telepon; ?></td>
               <td><?php echo $tgl_daftar; ?></td>
            </tr>
         <?php
         }
         mysqli_close($db);
         ?>
      </tbody>
   </table>
</div>