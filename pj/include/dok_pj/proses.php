<?php
include 'include/config.php';

$perusahaan = $_POST['perusahaan'];
$no_permohonan = $_POST['no_permohonan'];
$tgl_permohonan = $_POST['tgl_permohonan'];
$penjamin = $_POST['penjamin'];
$tgl_sekarang = date('d-m-Y_h-i-s');


$lokasi_awal_sp = $_FILES['surat_permohonan']['tmp_name'];
$surat_permohonan = $_FILES['surat_permohonan']['name'];
$tujuan1 = "../admin/img/file_pj/surat_permohonan/$tgl_sekarang-$surat_permohonan";

$lokasi_awal_kuasa = $_FILES['surat_kuasa']['tmp_name'];
$surat_kuasa = $_FILES['surat_kuasa']['name'];
$tujuan2 = "../admin/img/file_pj/surat_kuasa/$tgl_sekarang-$surat_kuasa";

$lokasi_awal_jaminan = $_FILES['jaminan']['tmp_name'];
$jaminan = $_FILES['jaminan']['name'];
$tujuan3 = "../admin/img/file_pj/surat_jaminan/$tgl_sekarang-$jaminan";

$lokasi_awal_sptnp = $_FILES['sptnp']['tmp_name'];
$sptnp = $_FILES['sptnp']['name'];
$tujuan4 = "../admin/img/file_pj/surat_sptnp/$tgl_sekarang-$sptnp";

$lokasi_awal_pib = $_FILES['pib']['tmp_name'];
$pib = $_FILES['pib']['name'];
$tujuan5 = "../admin/img/file_pj/surat_pib/$tgl_sekarang-$pib";

$lokasi_awal_skep = $_FILES['skep']['tmp_name'];
$skep = $_FILES['skep']['name'];
$tujuan6 = "../admin/img/file_pj/surat_skep/$tgl_sekarang-$skep";


if ($perusahaan !== "") {

	$upload1 = move_uploaded_file($lokasi_awal_sp, $tujuan1);
	$upload2 = move_uploaded_file($lokasi_awal_kuasa, $tujuan2);
	$upload3 = move_uploaded_file($lokasi_awal_jaminan, $tujuan3);
	$upload4 = move_uploaded_file($lokasi_awal_sptnp, $tujuan4);
	$upload5 = move_uploaded_file($lokasi_awal_pib, $tujuan5);
	$upload6 = move_uploaded_file($lokasi_awal_skep, $tujuan6);

	if (!empty($upload1) and !empty($upload2) and !empty($upload3) and !empty($upload4) and !empty($upload5) and !empty($upload6)) {

		$tambah1 = mysqli_query($db, "INSERT INTO dok (id_pj, perusahaan, no_permohonan, tgl_permohonan, surat_permohonan, surat_kuasa, jaminan, sptnp, pib, skep, tgl_kirim, nama_penjamin, keterangan) VALUES ('$id_pj', '$perusahaan', '$no_permohonan', '$tgl_permohonan', '$tgl_sekarang-$surat_permohonan', '$tgl_sekarang-$surat_kuasa', '$tgl_sekarang-$jaminan', '$tgl_sekarang-$sptnp', '$tgl_sekarang-$pib', '$tgl_sekarang-$skep', NOW(), '$penjamin', 'Pending')");

		echo "
			<script>
				alert('Insert Data Succsess !!');
				window.location ='?page=dok_pj/dok_pj.php'
			</script>
		";
	} elseif (!empty($upload1) and !empty($upload2) and !empty($upload3) and !empty($upload4)) {
		$tambah2 = mysqli_query($db, "INSERT INTO dok (id_pj, perusahaan, no_permohonan, tgl_permohonan, surat_permohonan, surat_kuasa, jaminan, sptnp, tgl_kirim, nama_penjamin, keterangan) VALUES ('$id_pj', '$perusahaan', '$no_permohonan', '$tgl_permohonan', '$tgl_sekarang-$surat_permohonan', '$tgl_sekarang-$surat_kuasa', '$tgl_sekarang-$jaminan', '$tgl_sekarang-$sptnp', NOW(), '$penjamin', 'Pending')");

		echo "
			<script>
				alert('Insert Data Succsess !!');
				window.location ='?page=dok_pj/dok_pj.php'
			</script>
		";
	} elseif (!empty($upload1) and !empty($upload2) and !empty($upload3)) {
		$tambah3 = mysqli_query($db, "INSERT INTO dok (id_pj, perusahaan, no_permohonan, tgl_permohonan, surat_permohonan, surat_kuasa, jaminan, tgl_kirim, nama_penjamin, keterangan) VALUES ('$id_pj', '$perusahaan', '$no_permohonan', '$tgl_permohonan', '$tgl_sekarang-$surat_permohonan', '$tgl_sekarang-$surat_kuasa', '$tgl_sekarang-$jaminan', NOW(), '$penjamin', 'Pending')");

		echo "
			<script>
				alert('Insert Data Succsess !!');
				window.location ='?page=dok_pj/dok_pj.php'
			</script>
		";
	}
} else {
	echo "
			<script>
				alert('Insert Data Gagal !!');
				window.location ='?page=dok_pj/form_dok_pj.php&id=$id'
			</script>
		";
}
mysqli_close($db);
