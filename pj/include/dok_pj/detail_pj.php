<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Dokumen Pengguna Jasa
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
              <a href="include/laporan/laporan_pj_selesai.php?id=<?= $id_pj ?>" class="btn btn-warning">Export to Excel</a>
              <div class="box-body">
                <h2>DATA TELAH SELESAI DI PROSES</h2>
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Perusahaan</th>
                        <th>No Permohonan</th>
                        <th>Tanggal Permohonan</th>
                        <th>Surat Permohonan</th>
                        <th>Surat Kuasa</th>
                        <th>Bukti Setor/BG/Customs Bond</th>
                        <th>PTNP</th>
                        <th>PIB</th>
                        <th>SKEP</th>
                        <th>Tanggal Kirim</th>
                        <th>Nama Penjamin</th>
                        <th>Nama Pegawai</th>
                        <th>Penelitian</th>
                        <th>Tanggal Penelitian</th>
                        <th>Konfirmasi</th>
                        <th>Tanggal Konfirmasi</th>
                        <th>Validasi</th>
                        <th>Tanggal Validasi</th>
                        <th>BPJ</th>
                        <th>Tanggal BPJ</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include 'include/config.php';
                      $sql = "SELECT * FROM dok WHERE id_pj = '$id_pj' ORDER BY id_dok DESC";
                      $query = mysqli_query($db, $sql);
                      $no = 1;
                      while ($ambil = mysqli_fetch_array($query)) {
                        $id = $ambil['id_dok'];
                        $perusahaan = $ambil['perusahaan'];
                        $no_permohonan = $ambil['no_permohonan'];
                        $tgl_permohonan = $ambil['tgl_permohonan'];
                        $surat_permohonan = $ambil['surat_permohonan'];
                        $surat_kuasa = $ambil['surat_kuasa'];
                        $jaminan = $ambil['jaminan'];
                        $sptnp = $ambil['sptnp'];
                        $pib = $ambil['pib'];
                        $skep = $ambil['skep'];
                        $tgl_kirim = $ambil['tgl_kirim'];
                        $nama_penjamin = $ambil['nama_penjamin'];
                        $nama_pegawai = $ambil['nama_pegawai'];
                        $penelitian = $ambil['penelitian'];
                        $tgl_p = $ambil['tgl_p'];
                        $konfirmasi = $ambil['konfirmasi'];
                        $tgl_k = $ambil['tgl_k'];
                        $validasi = $ambil['validasi'];
                        $tgl_v = $ambil['tgl_v'];
                        $pbj = $ambil['pbj'];
                        $tgl_pbj = $ambil['tgl_pbj'];
                        $keterangan = $ambil['keterangan'];

                        if ($keterangan == "Selesai") {
                      ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $perusahaan; ?></td>
                            <td><?php echo $no_permohonan; ?></td>
                            <td><?php echo $tgl_permohonan; ?></td>
                            <td>
                              <a href="../admin/img/file_pj/surat_permohonan/<?php echo $surat_permohonan; ?>">
                                <?php echo $surat_permohonan; ?>
                              </a>
                            </td>
                            <td>
                              <a href="../admin/img/file_pj/surat_kuasa/<?php echo $surat_kuasa; ?>">
                                <?php echo $surat_kuasa; ?>
                              </a>
                            </td>
                            <td>
                              <a href="../admin/img/file_pj/surat_jaminan/<?php echo $jaminan; ?>">
                                <?php echo $jaminan; ?>
                              </a>
                            </td>
                            <td>
                              <a href="../admin/img/file_pj/surat_sptnp/<?php echo $sptnp; ?>">
                                <?php echo $sptnp; ?>
                              </a>
                            </td>
                            <td>
                              <a href="../admin/img/file_pj/surat_pib/<?php echo $pib; ?>">
                                <?php echo $pib; ?>
                              </a>
                            </td>
                            <td>
                              <a href="../admin/img/file_pj/surat_skep/<?php echo $skep; ?>">
                                <?php echo $skep; ?>
                              </a>
                            </td>
                            <td><?= $tgl_kirim ?></td>
                            <td><?= $nama_penjamin ?></td>
                            <td><?= $nama_pegawai ?></td>
                            <td><?= $penelitian ?></td>
                            <td><?= $tgl_p ?></td>
                            <td>
                              <a href="../admin/img/file_pj/surat_konfirmasi/<?php echo $konfirmasi; ?>">
                                <?php echo $konfirmasi; ?>
                              </a>
                            </td>
                            <td><?= $tgl_k ?></td>
                            <td>
                              <a href="../admin/img/file_pj/surat_validasi/<?php echo $validasi; ?>">
                                <?php echo $validasi; ?>
                              </a>
                            </td>
                            <td><?= $tgl_v ?></td>
                            <td>
                              <a href="../admin/img/file_pj/surat_bpj/<?php echo $pbj; ?>">
                                <?php echo $pbj; ?>
                              </a>
                            </td>
                            <td><?= $tgl_pbj ?></td>
                            <td>
                              <?php
                              if ($keterangan == "Selesai") {
                              ?>
                                <a class="btn btn-danger">Selesai</a>
                              <?php } else { ?>
                                <a class="btn btn-success" href="?page=dok_pj/form_dok_pj.php&id=<?= $id ?>">Surat Validasi</a>
                              <?php } ?>
                            </td>
                          </tr>
                      <?php
                        }
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