<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Pegawai
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
                $id = $_GET['id'];
                ?>
                <form action='?page=dok_pj/proses.php' method='post' enctype='multipart/form-data'>
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <?php
                  $bear = $_GET['data'];
                  include 'include/config.php';
                  $sql = "SELECT * FROM dok WHERE id_dok = '$id' ORDER BY id_dok DESC";
                  $query = mysqli_query($db, $sql);
                  $ambil = mysqli_fetch_assoc($query);
                  $sptnp = $ambil['sptnp'];
                  $penelitian = $ambil['penelitian'];
                  if ($bear == "edit") {
                    if (empty($sptnp)) {
                      echo "
                        <input type='hidden' name='edit' value='$bear'>
                        <div class='form-group'>
                          <label>Penelitian</label>
                          <select required class='form-control' name='penelitian'>
                            <option value='BPJ'>BPJ</option>
                          </select>
                        </div>
                      ";
                    } else {
                      echo "
                        <input type='hidden' name='edit' value='$bear'>
                        <div class='form-group'>
                          <label>Penelitian</label>
                          <select required class='form-control' name='penelitian'>
                            <option value='Penerima'>Penerima</option>
                            <option value='Kembali'>Kembali</option>
                          </select>
                        </div>
                      ";
                    }
                  ?>

                  <?php } elseif ($bear == "konfir") { ?>
                    <input type="hidden" name="edit" value="<?= $bear ?>">
                    <div class='form-group'>
                      <label>Upload Surat Konfirmasi</label>
                      <input required type='file' name='konfirmasi' class='form-control'>
                    </div>
                  <?php } else { ?>
                    <input type="hidden" name="edit" value="<?= $bear ?>">
                    <input type="hidden" name="peneliti" value="<?= $penelitian ?>">
                    <div class='form-group'>
                      <label>Upload BPJ</label>
                      <input required type='file' name='bpj' class='form-control'>
                    </div>
                  <?php } ?>
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