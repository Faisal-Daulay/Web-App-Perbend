<?php
	include '../admin/include/config.php';
	$aksi = $_REQUEST['aksi'];

	$napeg = filter_input(INPUT_POST, 'napeg', FILTER_SANITIZE_STRING);
	$nip = filter_input(INPUT_POST, 'nip', FILTER_SANITIZE_STRING);
	$pangkat = filter_input(INPUT_POST, 'pangkat', FILTER_SANITIZE_STRING);
	$jabatan = filter_input(INPUT_POST, 'jabatan', FILTER_SANITIZE_STRING);
	$kode_organisasi = filter_input(INPUT_POST, 'kode_organisasi', FILTER_SANITIZE_STRING);
	$unit_organisasi = filter_input(INPUT_POST, 'unit_organisasi', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$jk = filter_input(INPUT_POST, 'jk', FILTER_SANITIZE_STRING);
	$agama = filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING);
	$telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_STRING);
	$alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
	$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
	$pass = filter_input(INPUT_POST, 'pass', FILTER_DEFAULT);

	$lokasi_awal = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];
	
	$tujuan = "../admin/img/img_pegawai/$nama_file";

	if ($aksi == 'tambah') {
		if ($napeg !=="") {

			$upload = move_uploaded_file($lokasi_awal, $tujuan);

			$tambah = mysqli_query($db, "INSERT INTO pegawai (foto, nama_pegawai, nip, pangkat, jabatan, kode_unit_organisasi, unit_organisasi, email, jk, agama, telepon, alamat) VALUES ('$nama_file', '$napeg', '$nip', '$pangkat', '$jabatan', '$kode_organisasi', '$unit_organisasi', '$email', '$jk', '$agama', '$telepon', '$alamat')");

			$id_pegawai = mysqli_insert_id($db);

			$tambah1 = mysqli_query($db, "INSERT INTO user (id_pegawai, username, password, status, status_akun) VALUES ('$id_pegawai', '$user', '$pass', 'Pegawai', 'Tidak Aktif')");

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
					window.location ='regis_pegawai.php'
				</script>
			";
		}
	}
	
	mysqli_close($db);
?>