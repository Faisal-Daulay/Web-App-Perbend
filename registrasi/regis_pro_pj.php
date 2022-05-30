<?php
	include '../admin/include/config.php';
	$aksi = $_REQUEST['aksi'];
	// filter_input(INPUT_POST, 'var', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY);

	$nama_pj = filter_input(INPUT_POST, 'nama_pj', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
	$npwp = filter_input(INPUT_POST, 'npwp', FILTER_SANITIZE_STRING);
	$perusahaan = filter_input(INPUT_POST, 'perusahaan', FILTER_SANITIZE_STRING);
	$alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
	$telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_STRING);
	$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
	$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

	$lokasi_lama = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];

	$tujuan = "../admin/img/img_pj/$nama_file";

	if ($aksi == 'tambah') {
		if ($nama_pj !=="") {

			$upload = move_uploaded_file($lokasi_lama, $tujuan);

			$tambah = mysqli_query($db, "INSERT INTO pj (nama_pj, foto, email_p, nik, npwp, perusahaan, alamat_p, telepon, tgl_daftar) VALUES ('$nama_pj', '$nama_file', '$email', '$nik', '$npwp', '$perusahaan', '$alamat', '$telepon', NOW())");

			$id_pj = mysqli_insert_id($db);

			$tambah1 = mysqli_query($db, "INSERT INTO user (id_pj, username, password, status, status_akun) VALUES ('$id_pj', '$user', '$pass', 'Pengguna Jasa', 'Tidak Aktif')");

			
			echo "
				<script>
					alert('Register Succsess !!');
					window.location ='../'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Register Gagal !!');
					window.location ='regis_pj.php'
				</script>
			";
		}
	}
	
	mysqli_close($db);
?>