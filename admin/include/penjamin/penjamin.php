<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Penjamin
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <a href="?page=penjamin/form_penjamin.php">
                <button type="submit" class="btn btn-primary tambah">Tambah Data</button>
              </a>
              <a href="include/laporan/laporan_penjamin.php" class="btn btn-warning">Export to Excel</a>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Foto</th>
                      <th>Nama Penjamin</th>
                      <th>Nik</th>
                      <th>Perusahaan</th>
                      <th>Email</th>
                      <th>NPWP</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'include/config.php';
                    $sql = "SELECT * FROM penjamin ORDER BY id_penjamin DESC";
                    $query = mysqli_query($db, $sql);
                    $no = 1;
                    while ($ambil = mysqli_fetch_array($query)) {
                      $id = $ambil['id_penjamin'];
                      $foto = $ambil['foto'];
                      $nama_pj = $ambil['nama_penjamin'];
                      $email_p = $ambil['email_p'];
                      $nik = $ambil['nik'];
                      $npwp = $ambil['npwp'];
                      $perusahaan = $ambil['perusahaan'];
                      $telepon = $ambil['telepon'];
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td>
                          <img src="img/img_penjamin/<?php echo $foto; ?>" width='100' alt="<?php echo $nama_pj; ?>">
                        </td>
                        <td><?php echo $nama_pj; ?></td>
                        <td><?php echo $nik; ?></td>
                        <td><?php echo $perusahaan; ?></td>
                        <td><?php echo $email_p; ?></td>
                        <td><?php echo $npwp; ?></td>
                        <td><?php echo $telepon; ?></td>
                        <td>
                          <div class="dropdown">
                            <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                              <li><a href="?page=penjamin/form_penjamin.php&id=<?php echo $id; ?>">Edit</a></li>
                              <li><a onClick="return confirm('Apakah anda yakin untuk menghapus?')" href="?page=penjamin/proses.php&id=<?php echo $id; ?>">Delete</a></li>
                              <li><a href="?page=penjamin/detail_penjamin.php&id=<?php echo $id; ?>">Lihat Detail</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    <?php
                    }
                    mysqli_close($db);
                    ?>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->