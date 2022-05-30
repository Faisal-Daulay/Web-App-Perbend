<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Dokumen Pegawai
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- <a href="?page=dok_pj/form_dok_pj.php">
                <button type="submit" class="btn btn-primary tambah">Tambah Data</button>
              </a> -->
              <a href="include/dok_pegawai/lap_dok_pegawai.php" class="btn btn-warning">Export to Excel</a>
              <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Perusahaan</th>
                        <th>No Permohonan</th>
                        <th>Tanggal Permohonan</th>
                        <th>Nama Pegawai</th>
                        <th>Penelitian</th>
                        <th>Tanggal Penelitian</th>
                        <th>Konfirmasi</th>
                        <th>Tanggal Konfirmasi</th>
                        <th>BPJ</th>
                        <th>Tanggal BPJ</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include 'include/config.php';
                      $sql = "SELECT * FROM dok ORDER BY id_dok DESC";
                      $query = mysqli_query($db, $sql);
                      $no = 1;
                      while ($ambil = mysqli_fetch_array($query)) {
                        $id = $ambil['id_dok'];
                        $perusahaan = $ambil['perusahaan'];
                        $no_permohonan = $ambil['no_permohonan'];
                        $tgl_permohonan = $ambil['tgl_permohonan'];
                        $nama_pegawai = $ambil['nama_pegawai'];
                        $penelitian = $ambil['penelitian'];
                        $tgl_p = $ambil['tgl_p'];
                        $konfirmasi = $ambil['konfirmasi'];
                        $tgl_k = $ambil['tgl_k'];
                        $pbj = $ambil['pbj'];
                        $tgl_pbj = $ambil['tgl_pbj'];
                        $keterangan = $ambil['keterangan'];
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $perusahaan; ?></td>
                          <td><?php echo $no_permohonan; ?></td>
                          <td><?php echo $tgl_permohonan; ?></td>
                          <td><?= $nama_pegawai ?></td>
                          <td><?= $penelitian ?></td>
                          <td><?= $tgl_p ?></td>
                          <td>
                            <a href="img/file_pj/surat_konfirmasi/<?php echo $konfirmasi; ?>">
                              <?php echo $konfirmasi; ?>
                            </a>
                          </td>
                          <td><?= $tgl_k ?></td>
                          <td>
                            <a href="img/file_pj/surat_bpj/<?php echo $pbj; ?>">
                              <?php echo $pbj; ?>
                            </a>
                          </td>
                          <td><?= $tgl_pbj ?></td>
                          <td>
                            <?= $keterangan ?>
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