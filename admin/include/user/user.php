<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data User
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <a href="?page=user/form_user.php">
                <!-- <button type="submit" class="btn btn-primary tambah">Tambah Data</button> -->
              </a>
              <a href="include/laporan/laporan_user.php" class="btn btn-warning">Export to Excel</a>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Status</th>
                      <th>Status Akun</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'include/config.php';
                    $sql = "SELECT * FROM user";
                    $query = mysqli_query($db, $sql);
                    $no = 1;
                    while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                      $id = $ambil['id_user'];
                      $user = $ambil['username'];
                      $password = $ambil['password'];
                      $status_akun = $ambil['status_akun'];
                      $status = $ambil['status'];
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $user; ?></td>
                        <td><?php echo $password; ?></td>
                        <td><?php echo $status; ?></td>
                        <td><?php echo $status_akun; ?></td>
                        <td>
                          <div class="dropdown">
                            <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                              <li><a href="?page=user/form_user.php&id=<?php echo $id; ?>">Edit</a></li>
                              <li><a onClick="return confirm('Apakah anda yakin untuk menghapus?')" href="?page=user/proses.php&id=<?php echo $id; ?>">Delete</a></li>
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