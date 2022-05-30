<div class="row">
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h4><i class="fa fa-book"></i> Dasar Hukum Jaminan</h4>
      </div>
      <div class="icon">
        <i class="ion ion-yellow"></i>
      </div>
      <a href="../admin/img/file_info/259pmk10.pdf" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h4><i class="fa fa-book"></i> SOP Jaminan</h4>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="../admin/img/file_info/2bc2011.pdf" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h4><i class="fa fa-book"></i> Janji Layanan Jaminan</h4>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="../admin/img/file_info/janji-layanan.pdf" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->

  <div class="col-lg-6">
      <div id="jssor_1" style="position:relative;margin:0 auto; top:0px; left:-10px; width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
        </div>
        <!-- IMG SLIDER -->
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
          <?php
          include '../admin/include/config.php';
          $sql = "SELECT * FROM slider";
          $query = mysqli_query($db, $sql);
          while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $id = $ambil['id_slider'];
            $judul = $ambil['judul'];
            $link = $ambil['link'];
            $foto_slide = $ambil['foto_slide'];
          ?>
            <div style="background-color:#000000;">
              <img data-u="image" style="opacity:0.5;" src="../admin/img/img_slider/<?php echo $foto_slide; ?>" />
              <div data-ts="flat" data-p="320" style="left:144px;top:80px;width:550px;height:90px;position:absolute;overflow:hidden;">
                <div style="color: white;">
                  <h2><a href="<?= $link ?>" target="_blank"><?= $judul ?></a></h2>
                </div>
              </div>
            </div>
          <?php } ?>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
          <div data-u="prototype" class="i" style="width:13px;height:13px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
          </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg>
        </div>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Info Penting
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <?php
          $sql1 = "SELECT * FROM info ORDER BY id_info DESC LIMIT 0,5";
          $query1 = mysqli_query($db, $sql1);
          while($ambil1 = mysqli_fetch_array($query1)) {
          $id1 = $ambil1['id_info'];
          $judul1 = $ambil1['judul'];
          $isi1 = $ambil1['isi_event'];
          $tgl_post = $ambil1['tgl_post'];
        ?>
        <h3><?= $judul1 ?></h3>
        <small><?= $tgl_post ?></small>
        <p>
          <?= $isi1 ?>
        </p>
        <hr/>
        <?php } ?>
      </div>
    </div>
  </div>
</div><!-- /.row -->