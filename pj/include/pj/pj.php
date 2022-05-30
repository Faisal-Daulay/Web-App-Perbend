
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
            <div class="col-md-12">
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Foto</th>
                      <th>Nama Pengguna Jasa</th>
                      <th>Nik</th>
                      <th>Perusahaan</th>
                      <th>Telepon</th>
                      <th>Uername</th>
                      <th>Password</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include 'include/config.php';
                      $sql = "SELECT * FROM pj INNER JOIN user ON pj.id_pj = user.id_pj ";
                      $query = mysqli_query($db, $sql);
                      $no = 1;
                      while ($ambil = mysqli_fetch_array($query)) {
                        $id = $ambil['id_pj'];
                        $foto = $ambil['foto'];
                        $nama_pj = $ambil['nama_pj'];
                        $email_p = $ambil['email_p'];
                        $nik = $ambil['nik'];
                        $npwp = $ambil['npwp'];
                        $perusahaan = $ambil['perusahaan'];
                        $telepon = $ambil['telepon'];
                        $username = $ambil['username'];
                        $password = $ambil['password'];
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td>
                        <img src="../admin/img/img_pj/<?php echo $foto; ?>" width='100' alt="<?php echo $nama_pj; ?>">
                      </td>
                      <td><?php echo $nama_pj; ?></td>
                      <td><?php echo $nik; ?></td>
                      <td><?php echo $perusahaan; ?></td>
                      <td><?php echo $telepon; ?></td>
                      <td><?php echo $username; ?></td>
                      <td><?php echo md5($password); ?></td>
                      <td>
                        <div class="dropdown">
                          <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilih Aksi
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="?page=pj/form_pj.php&id=<?php echo $id; ?>">Edit</a></li>
                            <li><a href="?page=pj/detail_pj.php&id=<?php echo $id; ?>">Lihat Detail</a></li>
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