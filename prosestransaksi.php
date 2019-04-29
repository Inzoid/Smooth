<?php
include ("koneksi.php");
$a=$_POST['id_transaksi'];
$b=$_POST['id_user'];
$c=$_POST['id_order'];
$d=$_POST['tanggal'];
$e=$_POST['total_bayar'];
$simpan=mysqli_query($koneksi, "INSERT INTO transaksi(id_transaksi,id_user,id_order,tanggal,total_bayar)VALUES
 ('$a','$b','$c','$d','$e')")or die(mysqli_error($koneksi));
echo "<script>alert('Data Berhasil Ditambah.'); window.location = 'transaksi.php'</script>";
 ?>
