<?php
include("koneksi.php");

$id=$_POST['id_user'];
$username=$_POST['username'];
$password=$_POST['password'];
$id_level=$_POST['id_level'];


  $ubah=mysqli_query($koneksi,"UPDATE user
            SET id_user='$id', username='$username', password='$password', id_level='$id_level' WHERE id_user='$id' ") or die (mysqli_error());
  
echo "<script>alert('Berhasil Terubah.'); window.location = 'tampiluser.php'</script>";
?>

