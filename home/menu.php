<?php

session_start();
if (!isset($_SESSION['username'])){
header('Location:index.php');
}
?>

<?php
  if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

//unset qunatity
unset($_SESSION['qty_array']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Smooth</title>

  <!-- Favicons -->
  <link href="img/wp/favcon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="manager.php" class="logo"><b>SMO<span>OTH</span></b> <b>Manager</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
         <ul class="nav pull-right top-menu">
         <ul class="nav top-menu">
          <!-- settings start -->
          <li>&nbsp</li>
         
          <li>
              <form action="transaksi.php" method="POST">

            <input type="submit" class="btn btn-theme" value="Makanan"></button>
          </form>
          </li>

          <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>

           <li>
              <form action="minuman.php" method="POST">
            <input type="submit" class="btn btn-theme" value="Minuman"></button>
          </form>
          </li>

           <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
          
           <li>
              <form action="dessert.php" method="POST">
            <input type="submit" class="btn btn-theme" value="Desert"></button>
          </form>
          </li>
         
           <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
            <li class="active"><a href="view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span><font color="white"> Cart</font> 
              <font color="#4ECDC4"><span class="glyphicon glyphicon-shopping-cart"></span></a></li></font>
          <!-- settings start -->
       
      </ul>
        <!--  notification end -->
      </div>

       
      
     
    
      <div class="top-menu">
      <ul class="nav pull-right top-menu">
        <li>&nbsp&nbsp</li>
          <form action="logout.php" method="POST">
          <li><br><input type="submit" value="Logout" class="btn btn-theme btn-sm"></li>
        </form>
        </ul>
  </form>

         <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><br>
          <form action="cari.php" method="POST">

          <input type="text" name="carib" class="btn btn-default btn-sm">&nbsp
          <input type="submit" value="Cari" class="btn btn-theme btn-sm">&nbsp&nbsp&nbsp
          </form>
        </li>
      </ul>
           
                  
               
      </div>


    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->


<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/bal.jpeg" class="img-circle" width="80"></a></p>
          <h5 class="centered"> <?php
                      include "koneksi.php";
                      $username=$_SESSION['username'];
                      $koneksi= mysqli_connect('localhost', 'root', '', 'resto');
                      $q=mysqli_query($koneksi, "SELECT * from user where username='$username'");
                      while($data=mysqli_fetch_array($q)){
                        echo "
                         ".$data['nama']."";

                      }
                      ?></h5>


          <li class="mt">
            <a href="manager.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-coffee"></i>
              <span>Menu</span>
              </a>
            <ul class="sub">
              <li><a href="tampilmenu.php">Daftar Menu</a></li>
              
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>User</span>
              </a>
            <ul class="sub">
              <li><a href="tampiluser.php">Daftar User</a></li>
            </ul>
          </li>

           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-dollar"></i>&nbsp
              <span>Transaksi</span>
              </a>
            <ul class="sub">
              <li><a href="transaksi.php">Pesan</a></li>
            </ul>
          </li>
         
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->