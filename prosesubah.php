<?php
include("koneksi.php");

$id=$_POST['id_masakan'];
$nama_masakan=$_POST['nama_masakan'];
$harga=$_POST['harga'];
$status_makanan=$_POST['status_makanan'];
$kategori=$_POST['kategori'];
$gambar=$_POST['gambar'];


  $ubah=mysqli_query($koneksi,"UPDATE  masakan
            SET id_masakan='$id', nama_masakan='$nama_masakan', harga='$harga', status_makanan='$status_makanan', kategori='$kategori', gambar='$gambar' WHERE id_masakan='$id' ") or die (mysqli_error());
  
echo "<script>alert('Menu Berhasil Terubah.'); window.location = 'tampilmenu.php'</script>";
?>

