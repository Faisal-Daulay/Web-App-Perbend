<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Pengguna Jasa
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-5">
              <div class="box-body">
                <form action='?page=dok_pj/proses.php' method='post' enctype='multipart/form-data'>

                  <div class='form-group'>
                    <label>Perusahaan</label>
                    <input type='text' name='perusahaan' readonly class='form-control' value='<?= $perusahaan1 ?>'>
                  </div>
                  <div class='form-group'>
                    <label>Nomor Permohonan</label>
                    <input type='text' name='no_permohonan' class='form-control' placeholder='Nomor Permohonan'>
                  </div>
                  <div class='form-group'>
                    <label>Tanggal Permohonan</label>
                    <input type='date' name='tgl_permohonan' class='form-control' placeholder='Tanggal Permohonan'>
                  </div>
                  <div class='form-group'>
                    <label>Upload Surat Permohonan</label>
                    <input type='file' name='surat_permohonan' class='form-control'>
                  </div>
                  <div class='form-group'>
                    <label>Upload Surat Kuasa</label>
                    <input type='file' name='surat_kuasa' class='form-control'>
                  </div>
                  <div class='form-group'>
                    <label>Upload Bukti Setor/BG/Customs Bond</label>
                    <input type='file' name='jaminan' class='form-control'>
                  </div>
                  <div class='form-group'>
                    <h3>Apabila keberatan upload SPTNP</h3>
                    <label>Upload SPTNP</label>
                    <input type='file' name='sptnp' class='form-control'>
                  </div>
                  <div class='form-group'>
                    <h3>Apabila impor sementara upload PIB dan SKEP</h3>
                    <label>Upload PIB</label>
                    <input type='file' name='pib' class='form-control'>
                  </div>
                  <div class='form-group'>
                    <label>Upload SKEP</label>
                    <input type='file' name='skep' class='form-control'>
                  </div>
                  <h4>Pilih Tidak Ada Penjamin jika tidak di perlukan</h4>
                  <div class='form-group'>
                    <label>Nama Penjamin</label>
                    <select name="penjamin" class="form-control">
                      <option value="Bukti Setor">-- Buti Setor --</option>
                      <?php
                      $sqlq = mysqli_query($db, "SELECT * FROM penjamin");
                      while ($ambil_penjamin = mysqli_fetch_array($sqlq)) {

                        $id_penjamin = $ambil_penjamin['id_penjamin'];
                        $nama_penjamin = $ambil_penjamin['nama_penjamin'];
                      ?>
                        <option value="<?= $nama_penjamin ?>"><?= $nama_penjamin ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <button type='submit' class='btn btn-default'>Simpan</button>
                  <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                </form>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->