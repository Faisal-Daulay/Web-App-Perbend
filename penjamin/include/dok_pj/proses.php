<?php
include 'include/config.php';

$id = $_POST['id'];
$tgl_sekarang = date('d-m-Y_h-i-s');


$lokasi_awal_v = $_FILES['validasi']['tmp_name'];
$validasi = $_FILES['validasi']['name'];
$tujuan2 = "../admin/img/file_pj/surat_validasi/$tgl_sekarang-$validasi";

$upload = move_uploaded_file($lokasi_awal_v, $tujuan2);
if (!empty($upload)) {
	$tambah = mysqli_query($db, "UPDATE dok SET validasi = '$tgl_sekarang-$validasi', tgl_v = NOW(), keterangan = 'Proses' WHERE dok.id_dok = '$id'    ");

	echo "
			<script>
				alert('Insert Surat Validasi Succsess !!');
				window.location ='?page=dok_pj/dok_pj.php'
			</script>
		";
}
mysqli_close($db);
