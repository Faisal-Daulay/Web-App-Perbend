<?php 
	include 'include/config.php';

	$id = $_GET['id'];

	$hapus = mysqli_query($db, "DELETE FROM dok WHERE dok.id_dok = '$id' ");
	
	echo "
		<script>
			alert('Hapus Data Succsess !!');
			window.location ='index.php'
		</script>
	";

?>