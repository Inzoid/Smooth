<?php

include "koneksi.php";

$b=$_POST['username'];
$c=$_POST['password'];
$d=$_POST['nama'];
$e=$_POST['id_level'];
$f=$_POST['gambar'];


$input=mysqli_query($koneksi,"INSERT INTO user(username,password,nama,id_level,gambar)
	values('$b','$c','$d','$e','$f')")or die (mysql_error());
echo "<script>alert('Data Berhasil Ditambah.'); window.location = 'tampiluser.php'</script>";

?>
