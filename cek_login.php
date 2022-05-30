<?php
include 'admin/include/config.php';
session_start();

if ($_POST) {

	$user = filter_input(INPUT_POST, 'user', FILTER_DEFAULT);
	$pass = filter_input(INPUT_POST, 'pass', FILTER_DEFAULT);

	if ($user != "" && $pass != "") {

		$sql = mysqli_query($db, "SELECT * FROM user WHERE BINARY username='$user' AND BINARY password='$pass' ") or die();

		$cek_data = mysqli_num_rows($sql);

		if ($cek_data == TRUE) {

			$ambil_data = mysqli_fetch_assoc($sql);

			$username = $ambil_data['username'];
			$id_pegawai = $ambil_data['id_pegawai'];
			$id_penjamin = $ambil_data['id_penjamin'];
			$id_pj = $ambil_data['id_pj'];
			$status = $ambil_data['status'];
			$status_akun = $ambil_data['status_akun'];

			$_SESSION['username'] = $username;
			$_SESSION['id_pegawai'] = $id_pegawai;
			$_SESSION['id_penjamin'] = $id_penjamin;
			$_SESSION['id_pj'] = $id_pj;
			$_SESSION['status'] = $status;
			$_SESSION['status_akun'] = $status_akun;

			if ($status == "admin") {
				header("Location: admin/");
			} elseif ($status == "Penjamin") {
				header("Location: penjamin/");
			} elseif ($status == "Pegawai") {
				header("Location: pegawai/");
			} elseif ($status == "Pengguna Jasa") {
				header("Location: pj/");
			}
		} else {
			header("Location: ./");
		}
	}
}
