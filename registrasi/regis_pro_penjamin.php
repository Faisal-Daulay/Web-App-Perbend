<?php
	include '../admin/include/config.php';
	$aksi = $_REQUEST['aksi'];

	$nama_pj = filter_input(INPUT_POST, 'nama_penjamin', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
	$npwp = filter_input(INPUT_POST, 'npwp', FILTER_SANITIZE_STRING);
	$perusahaan = filter_input(INPUT_POST, 'perusahaan', FILTER_SANITIZE_STRING);
	$alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
	$telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_STRING);
	$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
	$pass = filter_input(INPUT_POST, 'pass', FILTER_DEFAULT);

	$lokasi_lama = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];

	$tujuan = "../admin/img/img_penjamin/$nama_file";

	if ($aksi == 'tambah') {
		if ($nama_pj !=="") {

			$upload = move_uploaded_file($lokasi_lama, $tujuan);

			$tambah = mysqli_query($db, "INSERT INTO penjamin (nama_penjamin, foto, email_p, nik, npwp, perusahaan, alamat_p, telepon, tgl_daftar) VALUES ('$nama_pj', '$nama_file', '$email', '$nik', '$npwp', '$perusahaan', '$alamat', '$telepon', NOW())");

			$id_penjamin = mysqli_insert_id($db);

			$tambah1 = mysqli_query($db, "INSERT INTO user (id_penjamin, username, password, status, status_akun) VALUES ('$id_penjamin', '$user', '$pass', 'Penjamin', 'Tidak Aktif')");
			
			echo "
				<script>
					alert('Register Succsess !!');
					window.location ='../'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Register Succsess !!');
					window.location ='./regis_penjamin.php'
				</script>
			";
		}
	}
	
	mysqli_close($db);
?>