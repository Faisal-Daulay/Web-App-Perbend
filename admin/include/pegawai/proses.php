<?php
	include 'include/config.php';
	$aksi = $_REQUEST['aksi'];
	$id = $_REQUEST['id'];

	$napeg = $_POST['napeg'];
	$nip = $_POST['nip'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$kode_organisasi = $_POST['kode_organisasi'];
	$unit_organisasi = $_POST['unit_organisasi'];
	$email = $_POST['email'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$lokasi_awal = $_FILES['foto']['tmp_name'];
	$nama_file = $_FILES['foto']['name'];
	
	$tujuan = "img/img_pegawai/$nama_file";

	if ($aksi == 'tambah') {
		if ($napeg !=="") {

			$upload = move_uploaded_file($lokasi_awal, $tujuan);

			$tambah = mysqli_query($db, "INSERT INTO pegawai (foto, nama_pegawai, nip, pangkat, jabatan, kode_unit_organisasi, unit_organisasi, email, jk, agama, telepon, alamat) VALUES ('$nama_file', '$napeg', '$nip', '$pangkat', '$jabatan', '$kode_organisasi', '$unit_organisasi', '$email', '$jk', '$agama', '$telepon', '$alamat')");

			$id_pegawai = mysqli_insert_id($db);

			$tambah1 = mysqli_query($db, "INSERT INTO user (id_pegawai, username, password, status, status_akun) VALUES ('$id_pegawai', '$user', '$pass', 'Pegawai', 'Tidak Aktif')");

			echo "
				<script>
					alert('Insert Succsess !!');
					window.location ='?page=pegawai/pegawai.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Insert Gagal !!');
					window.location ='?page=pegawai/pegawai.php&id=$id'
				</script>
			";
		}
	} else if ($aksi == 'edit') {
		if ($napeg !=="") {
			$upload = move_uploaded_file($lokasi_awal, $tujuan);
			if (empty($upload)) {
				$ubah = "UPDATE pegawai SET nama_pegawai = '$napeg', 
											nip = '$nip', 
											pangkat = '$pangkat', 
											jabatan = '$jabatan', 
											kode_unit_organisasi = '$kode_organisasi', 
											unit_organisasi = '$unit_organisasi', 
											email = '$email', 
											jk = '$jk', 
											agama = '$agama', 
											telepon = '$telepon', 
											alamat = '$alamat' WHERE pegawai.id_pegawai = '$id' ";

				$query_ubah = mysqli_query($db, $ubah);
			} else {
				$ubah = "UPDATE pegawai SET foto = '$nama_file', 
											nama_pegawai = '$napeg', 
											nip = '$nip', 
											pangkat = '$pangkat', 
											jabatan = '$jabatan', 
											kode_unit_organisasi = '$kode_organisasi', 
											unit_organisasi = '$unit_organisasi', 
											email = '$email', 
											jk = '$jk', 
											agama = '$agama', 
											telepon = '$telepon', 
											alamat = '$alamat' WHERE pegawai.id_pegawai = '$id' ";

				$query_ubah = mysqli_query($db, $ubah);
			}
			echo "
				<script>
					alert('Ubah Data Succsess !!');
					window.location ='?page=pegawai/pegawai.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Ubah Data Gagal !!');
					window.location ='?page=pegawai/pegawai.php&id=$id'
				</script>
			";
		}
		
	} else if ($id) {
		$hapus = mysqli_query($db, "DELETE FROM pegawai WHERE id_pegawai = '$id' ");
		$hapus1 = mysqli_query($db, "DELETE FROM user WHERE id_pegawai = '$id' ");
		echo "
			<script>
				window.location ='?page=pegawai/pegawai.php'
			</script>
		";
	}
	
	mysqli_close($db);
?>