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
            <div class="col-md-5">
              <div class="box-body">
                <?php
                include 'include/config.php';
                $id = $_REQUEST['id'];
                if (isset($id)) {
                  $aksi = 'edit';
                  $sql = "SELECT * FROM slider WHERE id_slider='$id' ";
                  $query = mysqli_query($db, $sql);
                  $ambil = mysqli_fetch_assoc($query);
                  $id = $ambil['id_slider'];
                  $judul = $ambil['judul'];
                  $link = $ambil['link'];
                  $foto_slider = $ambil['foto_slide'];

                  echo "
                      <form action='?page=slider/proses.php' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='aksi' value='$aksi'>
                        <input type='hidden' name='id' value='$id'>

                        <div class='form-group'>
                          <label>Judul</label>
                          <input type='text' name='judul' class='form-control' placeholder='Username' value='$judul'>
                        </div>
                        <div class='form-group'>
                          <label>Link</label>
                          <input type='text' name='link' class='form-control' placeholder='Link' value='$link'>
                        </div>
                        <div class='form-group'>
                          <label>Upload Foto Slider</label>
                          <input type='file' name='slider' class='form-control'>
                        </div>
                          <p style='margin-top:10px;'>
                            <img src='img/img_slider/$foto_slider' width='200'>
                          </p>
                        <button type='submit' class='btn btn-default'>Simpan</button>
                        <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                      </form>
                    ";
                } else {
                  $aksi = 'tambah';
                  echo "
                      <form action='?page=slider/proses.php' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='aksi' value='$aksi'>

                        <div class='form-group'>
                          <label>Judul</label>
                          <input type='text' name='judul' class='form-control' placeholder='Judul'>
                        </div>
                        <div class='form-group'>
                          <label>Link</label>
                          <input type='text' name='link' class='form-control' placeholder='Link'>
                        </div>
                        <div class='form-group'>
                          <label>Upload Foto Slider</label>
                          <input type='file' name='slider' class='form-control'>
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