<?php
include 'include/config.php';
$aksi = $_REQUEST['aksi'];
$id   = $_REQUEST['id'];
$judul = $_POST['judul'];
$isi = mysqli_real_escape_string($db, $_POST['isi']);
// var_dump($isi);
// exit();
if ($aksi == 'tambah') {
	if ($judul !="") {
		$tambah = mysqli_query($db, "INSERT INTO info (judul, isi_event, tgl_post) VALUES ('$judul', '$isi', NOW())");
		echo "
			<script>
				alert('Insert Succsess !!');
				window.location ='?page=info/info.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('Insert Gagal !!');
				window.location ='?page=info/info.php'
			</script>
		";
	}
} else if ($aksi == 'edit') {
	if ($judul !="") {
		$ubah = "UPDATE info SET judul = '$judul', isi = '$isi' WHERE info.id_info = '$id' ";

		$query_ubah = mysqli_query($db, $ubah);

		echo "
			<script>
				alert('Ubah Data Succsess !!');
				window.location ='?page=info/info.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('Ubah Data Gagal !!');
				window.location ='?page=info/info.php&id=$id'
			</script>
		";
}
} else if ($id) {
	$hapus = "DELETE FROM info WHERE id_info = '$id' ";
	$query_del = mysqli_query($db, $hapus);
	echo "
		<script>
			window.location ='?page=info/info.php'
		</script>
	";
}

mysqli_close($db);
