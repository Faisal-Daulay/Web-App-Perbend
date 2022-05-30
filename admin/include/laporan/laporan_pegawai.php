<h1 class="box-title" align="center">
   <i class="fa fa-inbox"></i> Data Pegawai
</h1>
<div class="table-responsive">
   <table border="1" width="100%" id="example1" class="table table-bordered table-hover">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Nip</th>
            <th>Pangkat</th>
            <th>Jabatan</th>
            <th>Kode Unit Organisasi</th>
            <th>Unit Organisasi</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Telepon</th>
            <th>Alamat</th>
         </tr>
      </thead>
      <tbody>
         <?php
         include '../config.php';
         $sql = "SELECT * FROM pegawai ORDER BY id_pegawai DESC";
         $query = mysqli_query($db, $sql);
         $no = 1;
         while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $id = $ambil['id_pegawai'];
            $foto = $ambil['foto'];
            $nama_pegawai = $ambil['nama_pegawai'];
            $nip = $ambil['nip'];
            $pangkat = $ambil['pangkat'];
            $jabatan = $ambil['jabatan'];
            $kode_organisasi = $ambil['kode_unit_organisasi'];
            $unit_organisasi = $ambil['unit_organisasi'];
            $email = $ambil['email'];
            $jk = $ambil['jk'];
            $agama = $ambil['agama'];
            $telepon = $ambil['telepon'];
            $alamat = $ambil['alamat'];

            if ($jabatan == "kk") {
               $jabatan = "Kepala Kantor";
            } elseif ($jabatan == "ks") {
               $jabatan = "Kepala Seksi";
            } elseif ($jabatan == "pf") {
               $jabatan = "Pejabat Fungsional";
            } elseif ($jabatan == "p") {
               $jabatan = "Pelaksana";
            }

            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Data Pegawai.xls");
         ?>
            <tr>
               <td><?php echo $no++; ?></td>
               <td><?php echo $nip; ?></td>
               <td><?php echo $pangkat; ?></td>
               <td><?php echo $jabatan; ?></td>
               <td><?= $kode_organisasi ?></td>
               <td><?= $unit_organisasi ?></td>
               <td><?= $email ?></td>
               <td><?= $jk ?></td>
               <td><?= $agama ?></td>
               <td><?= $telepon ?></td>
               <td><?= $alamat ?></td>
            </tr>
         <?php
         }
         mysqli_close($db);
         ?>
      </tbody>
   </table>
</div>