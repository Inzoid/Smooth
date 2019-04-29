<?php

include "koneksi.php";
$b=$_POST['nama_masakan'];
$c=$_POST['harga'];
$d=$_POST['status_makanan'];
$e=$_POST['kategori'];
$f=$_POST['gambar'];


$input=mysqli_query($koneksi,"INSERT INTO masakan(nama_masakan,harga,status_makanan,kategori,gambar)
	values('$b','$c','$d','$e','$f')")or die (mysql_error());
echo "<script>alert('Data Berhasil Ditambah.'); window.location = 'tampilmenu.php'</script>";
?>
