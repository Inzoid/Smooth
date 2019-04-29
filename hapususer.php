<?php
	include ("koneksi.php");

	$id = $_GET['id_user'];

	$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id'") or die (mysqli_error($koneksi));
	echo "<script>alert('Akun Berhasil Dihapus.'); window.location = 'tampiluser.php'</script>";

	     
				 
?>
