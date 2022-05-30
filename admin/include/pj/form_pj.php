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
                <?php 
                  include 'include/config.php';
                  $id = $_REQUEST['id'];
                  if (isset($id)) {
                    $aksi = 'edit';
                    $sql = "SELECT * FROM pj WHERE id_pj='$id' ";
                    $query = mysqli_query($db, $sql);
                    $ambil = mysqli_fetch_array($query);
                        $id_pj = $ambil['id_pj'];
                        $foto = $ambil['foto'];
                        $nama_pj = $ambil['nama_pj'];
                        $email_p = $ambil['email_p'];
                        $nik = $ambil['nik'];
                        $npwp = $ambil['npwp'];
                        $perusahaan = $ambil['perusahaan'];
                        $telepon = $ambil['telepon'];
                        $alamat_p = $ambil['alamat_p'];
                        $tgl_daftar = $ambil['tgl_daftar'];

                    echo "
                      <form action='?page=pj/proses.php' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='aksi' value='$aksi'>
                        <input type='hidden' name='id' value='$id'>

                        <div class='form-group'>
                          <label>Nama Pengguna Jasa</label>
                          <input type='text' name='nama_pj' class='form-control' value='$nama_pj'>
                        </div>
                        <div class='form-group'>
                          <label>Email</label>
                          <input type='email' name='email' class='form-control' value='$email_p'>
                        </div>
                        <div class='form-group'>
                          <label>Nik</label>
                          <input type='text' name='nik' class='form-control' value='$nik'>
                        </div>
                        <div class='form-group'>
                          <label>NPWP</label>
                          <input type='text' name='npwp' class='form-control' value='$npwp'>
                        </div>
                        <div class='form-group'>
                          <label>Perusahaan</label>
                          <input type='text' name='perusahaan' class='form-control' value='$perusahaan'>
                        </div>
                        <div class='form-group'>
                          <label>Alamat</label>
                          <textarea name='alamat' class='form-control' rows='4'>$alamat_p</textarea>
                        </div>
                        <div class='form-group'>
                          <label>Telepon</label>
                          <input type='text' name='telepon' class='form-control'  value='$telepon'>
                        </div>
                        <div class='form-group'>
                          <label>Upload Foto Pengguna Jasa</label>
                          <input type='file' name='foto' class='form-control'>
                        </div>
                          <p style='margin-top:10px;'>
                            <img src='img/img_pj/$foto' width='200'>
                          </p>
                        <button type='submit' class='btn btn-default'>Simpan</button>
                        <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                      </form>
                    ";
                  } else {
                    $aksi = 'tambah';
                    echo "
                      <form action='?page=pj/proses.php' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='aksi' value='$aksi'>

                        <div class='form-group'>
                          <label>Nama Pengguna Jasa</label>
                          <input type='text' name='nama_pj' class='form-control' placeholder='Nama Pengguna Jasa'>
                        </div>
                        <div class='form-group'>
                          <label>Email</label>
                          <input type='email' name='email' class='form-control' placeholder='Email'>
                        </div>
                        <div class='form-group'>
                          <label>Nik</label>
                          <input type='text' name='nik' class='form-control' placeholder='Nik'>
                        </div>
                        <div class='form-group'>
                          <label>NPWP</label>
                          <input type='text' name='npwp' class='form-control' placeholder='NPWP'>
                        </div>
                        <div class='form-group'>
                          <label>Perusahaan</label>
                          <input type='text' name='perusahaan' class='form-control' placeholder='Perusahaan'>
                        </div>
                        <div class='form-group'>
                          <label>Alamat</label>
                          <textarea name='alamat' class='form-control' rows='4'></textarea>
                        </div>
                        <div class='form-group'>
                          <label>Telepon</label>
                          <input type='text' name='telepon' class='form-control' placeholder='Telepon'>
                        </div>
                        <div class='form-group'>
                          <label>Username</label>
                          <input type='text' name='user' class='form-control' placeholder='Username'>
                        </div>
                        <div class='form-group'>
                          <label>Password</label>
                          <input type='password' name='pass' class='form-control' placeholder='Password'>
                        </div>
                        <div class='form-group'>
                          <label>Upload Foto Pengguna Jasa</label>
                          <input type='file' name='foto' class='form-control'>
                        </div>
                        <button type='submit' class='btn btn-default'>Simpan</button>
                        <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                      </form>
                    ";
                  }

                  mysqli_close($db);
                ?>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->