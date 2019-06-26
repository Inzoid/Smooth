<?php

include "koneksi.php";
$a=$_POST['nama_menu'];
$b=$_POST['harga'];
$c=$_POST['jumlah'];
$d=$_POST['total'];
$e=$_POST['tanggal'];
$f=$_POST['kembalian'];


$input=mysqli_query($koneksi,"INSERT INTO transaksi(nama_menu,harga,jumlah,total,tanggal,kembalian)
	values('$a','$b','$c','$d','$e','$f')")or die (mysql_error());
echo "<script>alert('Data Tersimpan.');window.location = 'index.php';</script>";
?>

