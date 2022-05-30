<?php
include 'include/config.php';

if ($_POST) {
	$id = $_POST['id'];
	$edit = $_POST['edit'];
	$penelitian = $_POST['penelitian'];
	$peneliti = $_POST['peneliti'];
	$tgl_sekarang = date('d-m-Y_h-i-s');

	$lokasi_awal_k = $_FILES['konfirmasi']['tmp_name'];
	$konfirmasi = $_FILES['konfirmasi']['name'];
	$tujuan1 = "../admin/img/file_pj/surat_konfirmasi/$tgl_sekarang-$konfirmasi";

	$lokasi_awal_bpj = $_FILES['bpj']['tmp_name'];
	$bpj = $_FILES['bpj']['name'];
	$tujuan2 = "../admin/img/file_pj/surat_bpj/$tgl_sekarang-$bpj";

	if ($edit == "edit") {
		if ($penelitian == "Penerima") {

			$tambah = mysqli_query($db, "UPDATE dok SET id_pegawai = '$id_pegawai', 
																  nama_pegawai = '$username', 
																  penelitian = '$penelitian', 
																  tgl_p = NOW(), 
																  keterangan = 'Proses' WHERE dok.id_dok = '$id' ");

			echo "
					<script>
						alert('Insert Penelitian Succsess !!');
						window.location ='?page=dok_pj/dok_pj.php'
					</script>
				";
		} elseif ($penelitian == "Kembali") {

			$tambah = mysqli_query($db, "UPDATE dok SET id_pegawai = '$id_pegawai', 
																  nama_pegawai = '$username', 
																  penelitian = '$penelitian', 
																  tgl_p = NOW(), 
																  keterangan = 'Proses' WHERE dok.id_dok = '$id' ");

			echo "
				<script>
					alert('Insert Penelitian Succsess !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
		} elseif ($penelitian == "BPJ") {

			$tambah = mysqli_query($db, "UPDATE dok SET id_pegawai = '$id_pegawai', 
																  nama_pegawai = '$username', 
																  penelitian = '$penelitian', 
																  tgl_p = NOW(),
																  keterangan = 'Proses' WHERE dok.id_dok = '$id' ");

			echo "
				<script>
					alert('Insert Penelitian Succsess !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Insert Penelitian Gagal !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
		}
	} else if ($edit == "konfir") {
		$upload = move_uploaded_file($lokasi_awal_k, $tujuan1);
		$tambah = mysqli_query($db, "UPDATE dok SET konfirmasi = '$tgl_sekarang-$konfirmasi', tgl_k = NOW() WHERE dok.id_dok = '$id'  ");

		echo "
				<script>
					alert('Insert Surat Konfirmasi Succsess !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
	}else {

		$upload = move_uploaded_file($lokasi_awal_bpj, $tujuan2);

		if ($peneliti == "") {
			$tambah = mysqli_query($db, "UPDATE dok SET pbj = '$tgl_sekarang-$bpj', tgl_pbj = NOW(),
																  keterangan = 'Selesai' WHERE dok.id_dok = '$id'   ");

			echo "
				<script>
					alert('Insert BPJ Succsess !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
		} elseif ($peneliti == "Penerima") {
			$tambah = mysqli_query($db, "UPDATE dok SET pbj = '$tgl_sekarang-$bpj', tgl_pbj = NOW(),
																  keterangan = 'Selesai' WHERE dok.id_dok = '$id'   ");

			echo "
				<script>
					alert('Insert BPJ Succsess !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
		} elseif ($peneliti == "Kembali") {
			$tambah = mysqli_query($db, "UPDATE dok SET pbj = '$tgl_sekarang-$bpj', tgl_pbj = NOW(), 
																  keterangan = 'Selesai' WHERE dok.id_dok = '$id'   ");

			echo "
				<script>
					alert('Insert BPJ Succsess !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
		} elseif ($peneliti == "BPJ") {
			$tambah = mysqli_query($db, "UPDATE dok SET pbj = '$tgl_sekarang-$bpj', tgl_pbj = NOW(), keterangan = 'Selesai' WHERE dok.id_dok = '$id'   ");

			echo "
				<script>
					alert('Insert BPJ Succsess !!');
					window.location ='?page=dok_pj/dok_pj.php'
				</script>
			";
		}
	}
}

mysqli_close($db);
