<?php
	include 'include/config.php';
	$aksi = $_REQUEST['aksi'];
	$id = $_REQUEST['id'];

	$nama_pj = $_POST['nama_pj'];
	$email = $_POST['email'];
	$nik = $_POST['nik'];
	$npwp = $_POST['npwp'];
	$perusahaan = $_POST['perusahaan'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$user = $_POST['user'];
	$passlama1 = $_POST['pass1'];
	$passbaru1 = $_POST['pass2'];

	$lokasi_lama = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];

	$tujuan = "img/img_pj/$nama_file";

	if ($aksi == 'tambah') {
		if ($nama_pj !=="") {

			$upload = move_uploaded_file($lokasi_lama, $tujuan);

			$tambah = mysqli_query($db, "INSERT INTO pj (nama_pj, foto, email_p, nik, npwp, perusahaan, alamat_p, telepon, tgl_daftar) VALUES ('$nama_pj', '$nama_file', '$email', '$nik', '$npwp', '$perusahaan', '$alamat', '$telepon', NOW())");

			$id_pj = mysqli_insert_id($db);

			$tambah1 = mysqli_query($db, "INSERT INTO user (id_pj, username, password, status, status_akun) VALUES ('$id_pj', '$user', '$pass', 'Pengguna Jasa', 'Tidak Aktif')");

			echo "
				<script>
					alert('Insert Succsess !!');
					window.location ='?page=pj/pj.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Insert Gagal !!');
					window.location ='?page=pj/pj.php&id=$id'
				</script>
			";
		}
	} else if ($aksi == 'edit') {
		if ($nama_pj !="" and $passlama1 !="" and $passbaru1!="") {

			$upload = move_uploaded_file($lokasi_lama, $tujuan);
			if (empty($upload)) {

				$sql11 = mysqli_query($db, "SELECT password FROM user WHERE password='$passlama1' ");
				$ambil_pass = mysqli_fetch_assoc($sql11);

				$password = $ambil_pass['password'];
				if ($passlama1 == $password) {
					$ubah = "UPDATE pj SET nama_pj = '$nama_pj', 
										   email_p = '$email', 
										   nik = '$nik', 
										   npwp = '$npwp', 
										   perusahaan = '$perusahaan', 
										   alamat_p = '$alamat', 
										   telepon = '$telepon', 
										   tgl_daftar = 'NOW()' WHERE pj.id_pj = '$id' ";

					$query_ubah = mysqli_query($db, $ubah);
				
					echo "
						<script>
							alert('Ubah Data Succsess !!');
							window.location ='?page=pj/pj.php'
						</script>
					";
				}
			} else {
				if ($passlama1 == $password) {

					$ubah = "UPDATE pj SET nama_pj = '$nama_pj', 
										   foto = '$nama_file', 
										   email_p = '$email', 
										   nik = '$nik', 
										   npwp = '$npwp', 
										   perusahaan = '$perusahaan', 
										   alamat_p = '$alamat', 
										   telepon = '$telepon', 
										   tgl_daftar = 'NOW()' WHERE pj.id_pj = '$id' ";

					$query_ubah = mysqli_query($db, $ubah);
					echo "
						<script>
							alert('Ubah Data Gagal !!');
							window.location ='?page=pj/pj.php&id=$id'
						</script>
					";
				}
			}
			// echo "
			// 	<script>
			// 		alert('Ubah Data Succsess !!');
			// 		window.location ='?page=pj/pj.php'
			// 	</script>
			// ";
		} else {
			echo "
				<script>
					alert('Ubah Data Gagal !!');
					window.location ='?page=pj/pj.php&id=$id'
				</script>
			";
		}
		
	} else if ($id) {
		$hapus = mysqli_query($db, "DELETE FROM pj WHERE id_pj = '$id' ");
		$hapus1 = mysqli_query($db, "DELETE FROM user WHERE id_pj = '$id' ");
		echo "
			<script>
				window.location ='?page=pj/pj.php'
			</script>
		";
	}
	
	mysqli_close($db);
?>