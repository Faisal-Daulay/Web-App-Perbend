<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Slider
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <a href="?page=slider/form_slider.php">
                <button type="submit" class="btn btn-primary tambah">Tambah Data</button>
              </a>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Link</th>
                      <th>Slider</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'include/config.php';
                    $sql = "SELECT * FROM slider";
                    $query = mysqli_query($db, $sql);
                    $no = 1;
                    while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                      $id = $ambil['id_slider'];
                      $judul = $ambil['judul'];
                      $link = $ambil['link'];
                      $foto_slide = $ambil['foto_slide'];
                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $judul; ?></td>
                        <td><?php echo $link; ?></td>
                        <td>
                          <img width="500" src="img/img_slider/<?php echo $foto_slide; ?>" alt="<?php echo $foto_slide; ?>">
                        </td>
                        <td>
                          <div class="dropdown">
                            <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                              <li><a href="?page=slider/form_slider.php&id=<?php echo $id; ?>">Edit</a></li>
                              <li><a onClick="return confirm('Apakah anda yakin untuk menghapus?')" href="?page=slider/proses.php&id=<?php echo $id; ?>">Delete</a></li>
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