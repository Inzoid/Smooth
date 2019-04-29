<?php
	include ("koneksi.php");

	$id = $_GET['id_masakan'];

	$hapus = mysqli_query($koneksi, "DELETE FROM masakan WHERE id_masakan = '$id'") or die (mysqli_error($koneksi));
	 header('location: tampilmenu.php');

	     
				 
?>
