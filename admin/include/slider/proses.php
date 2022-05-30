<?php
include 'include/config.php';
$aksi = $_POST['aksi'];
$id   = $_POST['id'];
$judul = htmlentities($_POST['judul']);
$link = htmlentities($_POST['link']);

$lokasi_lama = $_FILES['slider']['tmp_name'];
$nama_file = $_FILES['slider']['name'];

$tujuan = "img/img_slider/$nama_file";
if ($aksi == 'tambah') {
	if ($judul != "") {
		$upload = move_uploaded_file($lokasi_lama, $tujuan);
		$tambah = "INSERT INTO slider (judul, link, foto_slide) VALUES ('$judul', '$link', '$nama_file')";
		$query_tambah = mysqli_query($db, $tambah);
		echo "
				<script>
					alert('Insert Succsess !!');
					window.location ='?page=slider/slider.php'
				</script>
			";
	} else {
		echo "
				<script>
					alert('Insert Gagal !!');
					window.location ='?page=slider/slider.php'
				</script>
			";
	}
} else if ($aksi == 'edit') {
	if ($judul != "") {
		$upload = move_uploaded_file($lokasi_lama, $tujuan);
		if (empty($upload)) {
			$ubah = "UPDATE slider SET judul = '$judul', link = '$link' WHERE slider.id_slider = '$id' ";

			$query_ubah = mysqli_query($db, $ubah);

			echo "
				<script>
					alert('Ubah Data Succsess !!');
					window.location ='?page=slider/slider.php'
				</script>
			";
		} else {
			$ubah = "UPDATE slider SET judul = '$judul', link = '$link', foto_slide = '$nama_file' WHERE slider.id_slider = '$id' ";

			$query_ubah = mysqli_query($db, $ubah);

			echo "
				<script>
					alert('Ubah Data Succsess !!');
					window.location ='?page=slider/slider.php'
				</script>
			";
		}
	} else {
		echo "
				<script>
					alert('Ubah Data Gagal !!');
					window.location ='?page=slider/slider.php&id=$id'
				</script>
			";
	}
} else if ($id) {
	$hapus = "DELETE FROM slider WHERE id_slider = '$id' ";
	$query_del = mysqli_query($db, $hapus);
	echo "
			<script>
				window.location ='?page=slider/slider.php'
			</script>
		";
}

mysqli_close($db);
