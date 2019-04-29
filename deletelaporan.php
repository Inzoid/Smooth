<?php
	include ("koneksi.php");

	$id = $_GET['id_order'];

	$hapus = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_order = '$id'") or die (mysqli_error($koneksi));
	 header('location: laporan.php');

	     
				 
?>
