<div class="row">
   <div class="col-md-12">
      <div class="box box-success box-solid">
         <div class="box-header with-border">
            <h3 class="box-title">
               <i class="fa fa-inbox"></i>Form Edit Data
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
                        <form action='?page=dok_pj/edit_pro.php' method='post' enctype='multipart/form-data'>
                           <input type="hidden" name="id" value="<?= $id ?>">
                           <?php
                           $bear = $_GET['data'];
                           include 'include/config.php';
                           $sql = "SELECT * FROM dok WHERE id_dok = '$id' ORDER BY id_dok DESC";
                           $query = mysqli_query($db, $sql);
                           $ambil = mysqli_fetch_assoc($query);
                           $sptnp = $ambil['sptnp'];
                           $penelitian = $ambil['penelitian'];
                           $surat_permohonan = $ambil['surat_permohonan'];
                           $surat_kuasa = $ambil['surat_kuasa'];
                           $jaminan = $ambil['jaminan'];
                           $sptnp = $ambil['sptnp'];
                           $pib = $ambil['pib'];
                           $skep = $ambil['skep'];
                           $konfirmasi = $ambil['konfirmasi'];
                           $validasi = $ambil['validasi'];
                           $pbj = $ambil['pbj'];
                           ?>
                           <div class='form-group'>
                              <label>Upload Surat Permohonan</label>
                              <input required type='file' name='permohonan' class='form-control'>
                              <a>
                                 <?php echo $surat_permohonan; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload Surat Kuasa</label>
                              <input required type='file' name='kuasa' class='form-control'>
                              <a>
                                 <?php echo $surat_kuasa; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload Bukti Setor/BG/Customs Bond</label>
                              <input required type='file' name='jaminan' class='form-control'>
                              <a>
                                 <?php echo $jaminan; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload SPTNP</label>
                              <input required type='file' name='sptnp' class='form-control'>
                              <a>
                                 <?php echo $sptnp; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload PIB</label>
                              <input required type='file' name='pib' class='form-control'>
                              <a>
                                 <?php echo $pib; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload SKEP</label>
                              <input required type='file' name='skep' class='form-control'>
                              <a>
                                 <?php echo $skep; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload Konfirmasi</label>
                              <input required type='file' name='konfirmasi' class='form-control'>
                              <a>
                                 <?php echo $konfirmasi; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload validasi</label>
                              <input required type='file' name='validasi' class='form-control'>
                              <a>
                                 <?php echo $validasi; ?>
                              </a>
                           </div>
                           <div class='form-group'>
                              <label>Upload BPJ</label>
                              <input required type='file' name='bpj' class='form-control'>
                              <a>
                                 <?php echo $pbj; ?>
                              </a>
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