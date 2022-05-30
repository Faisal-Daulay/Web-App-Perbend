<?php
	include 'include/config.php';
	$aksi = $_REQUEST['aksi'];
	$id   = $_REQUEST['id'];
	$user = htmlentities($_POST['user']);
	$pass = htmlentities($_POST['pass']);
	$status_akun = htmlentities($_POST['status_akun']);

	if ($aksi == 'tambah') {
		if ($user !=="") {
			$tambah = "INSERT INTO user (id_user, id_pegawai, id_penjamin, id_pj, username, password, status, status_akun) VALUES (NULL, '', '', '', '$user', '$pass', '$status', '$status_akun'))";
			$query_tambah = mysqli_query($db, $tambah);
			echo "
				<script>
					alert('Insert Succsess !!');
					window.location ='?page=user/user.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Insert Gagal !!');
					window.location ='?page=user/user.php&id=$id'
				</script>
			";
		}
	} else if ($aksi == 'edit') {
		if ($user !=="") {
			$ubah = "UPDATE user SET status_akun = '$status_akun' WHERE user.id_user = '$id' ";

			$query_ubah = mysqli_query($db, $ubah);
			
			echo "
				<script>
					alert('Ubah Data Succsess !!');
					window.location ='?page=user/user.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Ubah Data Gagal !!');
					window.location ='?page=user/user.php&id=$id'
				</script>
			";
		}
		
	} else if ($id) {
		$hapus = "DELETE FROM user WHERE id_user = '$id' ";
		$query_del = mysqli_query($db, $hapus);
		echo "
			<script>
				window.location ='?page=user/user.php'
			</script>
		";
	}
	
	mysqli_close($db);
?>