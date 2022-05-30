<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Pejamin
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
                  <div class='form-group'>
                    <label>Upload Surat Validasi</label>
                    <input required type='file' name='validasi' class='form-control'>
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