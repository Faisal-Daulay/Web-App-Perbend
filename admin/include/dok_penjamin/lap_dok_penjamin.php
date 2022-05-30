        <h1 class="box-title" align="center">
          <i class="fa fa-inbox"></i> Laporan Data Penjamin
        </h1>
        <div class="table-responsive">
          <table border="1">
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
                <th>Validasi</th>
                <th>Tanggal Validasi</th>
                <th>BPJ</th>
                <th>Tanggal BPJ</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../config.php';
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
                $validasi = $ambil['validasi'];
                $tgl_v = $ambil['tgl_v'];
                $pbj = $ambil['pbj'];
                $tgl_pbj = $ambil['tgl_pbj'];
                $keterangan = $ambil['keterangan'];

                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=Laporan Data Penjamin.xls");
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
                    <a href="img/file_pj/surat_validasi/<?php echo $validasi; ?>">
                      <?php echo $validasi; ?>
                    </a>
                  </td>
                  <td><?= $tgl_v ?></td>
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