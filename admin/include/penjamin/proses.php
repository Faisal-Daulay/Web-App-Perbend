<?php
	include 'include/config.php';
	$aksi = $_REQUEST['aksi'];
	$id = $_REQUEST['id'];

	$nama_pj = $_POST['nama_penjamin'];
	$email = $_POST['email'];
	$nik = $_POST['nik'];
	$npwp = $_POST['npwp'];
	$perusahaan = $_POST['perusahaan'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$lokasi_lama = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];

	$tujuan = "img/img_penjamin/$nama_file";

	if ($aksi == 'tambah') {
		if ($nama_pj !=="") {

			$upload = move_uploaded_file($lokasi_lama, $tujuan);

			$tambah = mysqli_query($db, "INSERT INTO penjamin (nama_penjamin, foto, email_p, nik, npwp, perusahaan, alamat_p, telepon, tgl_daftar) VALUES ('$nama_pj', '$nama_file', '$email', '$nik', '$npwp', '$perusahaan', '$alamat', '$telepon', NOW())");

			$id_penjamin = mysqli_insert_id($db);

			$tambah1 = mysqli_query($db, "INSERT INTO user (id_penjamin, username, password, status, status_akun) VALUES ('$id_penjamin', '$user', '$pass', 'Penjamin', 'Tidak Aktif')");
			echo "
				<script>
					alert('Insert Succsess !!');
					window.location ='?page=penjamin/penjamin.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Insert Gagal !!');
					window.location ='?page=penjamin/penjamin.php&id=$id'
				</script>
			";
		}
	} else if ($aksi == 'edit') {
		if ($nama_pj !=="") {

			$upload = move_uploaded_file($lokasi_lama, $tujuan);
			if (empty($upload)) {
				$ubah = "UPDATE penjamin SET nama_penjamin = '$nama_pj', 
									   		 email_p = '$email', 
									   		 nik = '$nik', 
									   		 npwp = '$npwp', 
									   		 perusahaan = '$perusahaan', 
									   		 alamat_p = '$alamat', 
									   		 telepon = '$telepon', 
									   		 tgl_daftar = 'NOW()' WHERE penjamin.id_penjamin = '$id' ";
				$query_ubah = mysqli_query($db, $ubah);
			} else {
				$ubah = "UPDATE penjamin SET nama_penjamin = '$nama_pj', 
									   		 foto = '$nama_file', 
									   		 email_p = '$email', 
									   		 nik = '$nik', 
									   		 npwp = '$npwp', 
									   		 perusahaan = '$perusahaan', 
									   		 alamat_p = '$alamat', 
									   		 telepon = '$telepon', 
									   		 tgl_daftar = 'NOW()' WHERE penjamin.id_penjamin = '$id' ";
				$query_ubah = mysqli_query($db, $ubah);
			}
			echo "
				<script>
					alert('Ubah Data Succsess !!');
					window.location ='?page=penjamin/penjamin.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Ubah Data Gagal !!');
					window.location ='?page=penjamin/penjamin.php&id=$id'
				</script>
			";
		}
		
	} else if ($id) {
		$hapus = mysqli_query($db, "DELETE FROM penjamin WHERE id_penjamin = '$id' ");
		$hapus1 = mysqli_query($db, "DELETE FROM user WHERE id_penjamin = '$id' ");
		echo "
			<script>
				window.location ='?page=penjamin/penjamin.php'
			</script>
		";
	}
	
	mysqli_close($db);
?>