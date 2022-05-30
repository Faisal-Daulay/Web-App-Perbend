<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Pegawai
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <a href="?page=pegawai/form_pegawai.php">
                <button type="submit" class="btn btn-primary tambah">Tambah Data</button>
              </a>
              <a href="include/laporan/laporan_pegawai.php" class="btn btn-warning">Export to Excel</a>
              <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Foto Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Nip</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include 'include/config.php';
                      $sql = "SELECT * FROM pegawai ORDER BY id_pegawai DESC";
                      $query = mysqli_query($db, $sql);
                      $no = 1;
                      while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        $id = $ambil['id_pegawai'];
                        $napeg = $ambil['nama_pegawai'];
                        $nip = $ambil['nip'];
                        $pangkat = $ambil['pangkat'];
                        $jabatan = $ambil['jabatan'];
                        $foto = $ambil['foto'];

                        if ($jabatan == "kk") {
                          $jabatan = "Kepala Kantor";
                        } elseif ($jabatan == "ks") {
                          $jabatan = "Kepala Seksi";
                        } elseif ($jabatan == "pf") {
                          $jabatan = "Pejabat Fungsional";
                        } elseif ($jabatan == "p") {
                          $jabatan = "Pelaksana";
                        }
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td>
                            <img src="img/img_pegawai/<?php echo $foto; ?>" width="100" alt="<?php echo $foto; ?>">
                          </td>
                          <td><?php echo $napeg; ?></td>
                          <td><?php echo $nip; ?></td>
                          <td><?php echo $pangkat; ?></td>
                          <td><?php echo $jabatan; ?></td>
                          <td>
                            <div class="dropdown">
                              <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pilih Aksi
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="?page=pegawai/form_pegawai.php&id=<?php echo $id; ?>">Edit</a></li>
                                <li><a onClick="return confirm('Apakah anda yakin untuk menghapus?')" href="?page=pegawai/proses.php&id=<?php echo $id; ?>">Delete</a></li>
                                <li><a href="?page=pegawai/detail_pegawai.php&id=<?php echo $id; ?>">Lihat Detail</a></li>
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
                </div>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->