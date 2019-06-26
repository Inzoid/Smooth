<?php 
$host="localhost";
$username="root";
$password="";
$dbase="resto";
$koneksi=mysqli_connect($host, $username, $password);
$pilihdb=mysqli_select_db($koneksi, $dbase);
?>