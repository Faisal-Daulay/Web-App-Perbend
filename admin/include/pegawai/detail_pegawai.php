<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Detail Pegawai
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <?php
            include 'include/config.php';
            $id = $_REQUEST['id'];

            $sql = "SELECT * FROM pegawai WHERE id_pegawai='$id' ";
            $query = mysqli_query($db, $sql);
            $ambil = mysqli_fetch_array($query);
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
            ?>
            <div class="col-md-6">
              <div class="box-body">
                <p align="center">
                  <img src='img/img_pegawai/<?= $foto ?>' width='200'>
                </p>
                <input type='hidden' name='aksi' value='$aksi'>
                <input type='hidden' name='id' value='$id'>

                <div class='form-group'>
                  <label>Nama Pegawai</label>
                  <input readonly type='text' name='napeg' class='form-control' value='<?= $nama_pegawai ?>'>
                </div>
                <div class='form-group'>
                  <label>Nip</label>
                  <input readonly type='text' name='nip' class='form-control' value='<?= $nip ?>'>
                </div>
                <div class='form-group'>
                  <label>Pangkat</label>
                  <input readonly type='text' name='pangkat' class='form-control' value='<?= $pangkat ?>'>
                </div>
                <div class='form-group'>
                  <label>Jabatan</label>
                  <select readonly name='jabatan' class='form-control'>
                    <option value='kk'>Kepala Kantor</option>
                    <option value='ks'>Kepala Seksi</option>
                    <option value='kf'>Pejabat Fungsional</option>
                    <option value='p'>Pelaksana</option>
                  </select>
                </div>
                <div class='form-group'>
                  <label>Kode Unit Organisasi</label>
                  <input readonly type='text' name='kode_organisasi' class='form-control' value='<?= $kode_organisasi ?>'>
                </div>
              </div><!-- /.box-body -->
            </div>
            <div class="col-md-6">
              <div class='form-group'>
                <label>Unit Organisasi</label>
                <input readonly type='text' name='unit_organisasi' class='form-control' value='<?= $unit_organisasi ?>'>
              </div>
              <div class='form-group'>
                <label>Email</label>
                <input readonly type='email' name='email' class='form-control' value='<?= $email ?>'>
              </div>
              <div class='form-group'>
                <label>Jenis Kelamin</label>
                <select readonly name='jk' class='form-control'>
                  <option value='L'>Laki - Laki</option>
                  <option value='P'>Perempuan</option>
                </select>
              </div>
              <div class='form-group'>
                <label>Agama</label>
                <select readonly name='agama' class='form-control'>
                  <option value='islam'>Islam</option>
                  <option value='kristen'>Kristen</option>
                  <option value='hindu'>Hindu</option>
                  <option value='budha'>Budha</option>
                </select>
              </div>
              <div class='form-group'>
                <label>Telepon</label>
                <input readonly type='text' name='telepon' class='form-control' value='<?= $telepon ?>'>
              </div>
              <div class='form-group'>
                <label>Alamat</label>
                <textarea readonly name='alamat' class='form-control' rows='4'><?= $alamat ?></textarea>
              </div>
              <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->
<?php mysqli_close($db); ?>