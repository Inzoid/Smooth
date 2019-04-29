<?php
if(isset($_POST['login'])){
session_start();
include ("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];

$koneksi= mysqli_connect('localhost', 'root', '', 'resto');

if (empty($username)){
  echo "<script>alert('Username Belum Diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else if (empty($password)){
  echo "<script>alert('Password Belum Diisi')</script>";
  echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
else{
  echo"<script>alert('Username atau Password salah') </script>";
  echo"<meta http-equiv='refresh' content='1 url=index.php'>";
}
  $sql = mysqli_query($koneksi, "SELECT *FROM user WHERE username='$username' AND password='$password'");
  if(mysqli_num_rows($sql)==1){
   $qry = mysqli_fetch_array($sql);
   $_SESSION['username']= $qry['username'];
   $_SESSION['password']= $qry['password'];
   $_SESSION['id_level']= $qry['id_level'];
   if($qry['id_level']=="manager"){
     header("location:manager.php");
   }
   else if ($qry['id_level']=="kasir") {
     header("location:kasir/index.php");
   }
}
 }
  ?>
