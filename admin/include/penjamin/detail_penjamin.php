<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Detail Penjamin
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
                $sql = "SELECT * FROM penjamin WHERE id_penjamin='$id' ";
                $query = mysqli_query($db, $sql);
                $ambil = mysqli_fetch_array($query);
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
            ?>
            <div class="col-md-6">
              <div class="box-body">
                <p align="center">
                  <img src='img/img_penjamin/<?=$foto?>' width='200'>
                </p>
                  <div class='form-group'>
                    <label>Nama Penjamin</label>
                      <input readonly type='text' name='nama_pj' class='form-control' value='<?=$nama_pj?>'>
                    </div>
                    <div class='form-group'>
                      <label>Email</label>
                      <input readonly type='email' name='email' class='form-control' value='<?=$email_p?>'>
                    </div>
                    <div class='form-group'>
                      <label>Nik</label>
                      <input readonly type='text' name='nik' class='form-control' value='<?=$nik?>'>
                    </div>
                    <div class='form-group'>
                      <label>NPWP</label>
                      <input readonly type='text' name='npwp' class='form-control' value='<?=$npwp?>'>
                    </div>
                    <div class='form-group'>
                      <label>Perusahaan</label>
                      <input readonly type='text' name='perusahaan' class='form-control' value='<?=$perusahaan?>'>
                  </div>
              </div><!-- /.box-body -->
            </div>
            <div class="col-md-6">
              <div class='form-group'>
              <label>Alamat</label>
                <textarea readonly name='alamat' class='form-control' rows='4'>$alamat_p</textarea>
              </div>
              <div class='form-group'>
                <label>Telepon</label>
                <input readonly type='text' name='telepon' class='form-control' value='<?=$telepon?>'>
              </div>
              <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->
<?php mysqli_close($db) ;?>