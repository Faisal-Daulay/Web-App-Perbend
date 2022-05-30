            <?php
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Dokument Proses Pegawai.xls");
            ?>
            <h1 align="center">
               Export Dokument Proses Pegawai
            </h1>

            <div class="box-body">
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
                        include '../../include/config.php';
                        $sql = "SELECT * FROM dok ORDER BY id_dok DESC";
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

                           if ($keterangan == "Pending" or $keterangan == "Proses") {
                              $tombol = "
                            <div class='dropdown'>
                              <button id='dLabel' class='btn btn-success' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                Pilih Aksi
                                <span class='caret'></span>
                              </button>
                              <ul class='dropdown-menu' aria-labelledby='dLabel'>
                                <li><a href='?page=dok_pj/form_dok_pj.php&id=$id&data=edit'>Edit</a></li>
                                <li><a href='?page=dok_pj/form_dok_pj.php&id=$id&data=konfir'>Konfirmasi</a></li>
                              </ul>
                            </div>
                          ";

                              $tombol1 = "";
                              $tombol2 = "";
                              if ($penelitian == "Kembali") {
                                 $tombol = "";
                                 $tombol2 = "<a class='btn btn-primary' href='?page=dok_pj/form_dok_pj.php&id=$id&data=konfir'>Surat Konfirmasi</a>";
                                 $tombol1 = "<a class='btn btn-primary' href='?page=dok_pj/form_dok_pj.php&id=$id&data=bpj'>Surat BPJ</a>";
                              } elseif ($penelitian == "pbj") {
                                 $tombol = "";
                                 $tombol2 = "<a class='btn btn-primary' href='?page=dok_pj/form_dok_pj.php&id=$id&data=konfir'>Surat Konfirmasi</a>";
                                 $tombol1 = "<a class='btn btn-primary' href='?page=dok_pj/form_dok_pj.php&id=$id&data=bpj'>Surat BPJ</a>";
                              } elseif ($penelitian == "Penerima") {
                                 $tombol = "
                            <div class='dropdown'>
                              <button id='dLabel' class='btn btn-success' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                Pilih Aksi
                                <span class='caret'></span>
                              </button>
                              <ul class='dropdown-menu' aria-labelledby='dLabel'>
                                <li><a href='?page=dok_pj/form_dok_pj.php&id=$id&data=edit'>Edit</a></li>
                              </ul>
                            </div>
                          ";
                              }
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
                                    <a href="../admin/img/file_pj/jaminan/<?php echo $jaminan; ?>">
                                       <?php echo $jaminan; ?>
                                    </a>
                                 </td>
                                 <td>
                                    <a href="../admin/img/file_pj/sptnp/<?php echo $sptnp; ?>">
                                       <?php echo $sptnp; ?>
                                    </a>
                                 </td>
                                 <td>
                                    <a href="../admin/img/file_pj/pib/<?php echo $pib; ?>">
                                       <?php echo $pib; ?>
                                    </a>
                                 </td>
                                 <td>
                                    <a href="../admin/img/file_pj/skep/<?php echo $skep; ?>">
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
                                 <td></td>
                                 <td></td>
                                 <td>
                                    <a href="../admin/img/file_pj/surat_bpj/<?php echo $pbj; ?>">
                                       <?php echo $pbj; ?>
                                    </a>
                                 </td>
                                 <td><?= $tgl_pbj ?></td>
                                 <td>
                                    <?php

                                    if ($penelitian == "") {
                                       echo $tombol;
                                    } elseif ($penelitian = "Kembali") {
                                       if ($pbj == "") {
                                          echo $tombol1;
                                          echo $tombol2;
                                       } elseif ($pbj != "") {
                                          echo $tombol;
                                       }
                                    }
                                    ?>
                                 </td>
                              </tr>
                           <?php } ?>
                        <?php
                        }
                        mysqli_close($db);
                        ?>
                     </tbody>
                  </table>
               </div>
            </div><!-- /.box-body -->