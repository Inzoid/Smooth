<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

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
      <a href="index.html" class="logo"><b>INZO<span>ID</span></b> <b>Manager</b></a>
     
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
   <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/bal.jpeg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Ikhbal</h5>
          <li class="mt">
            <a href="index.html">
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
              <li><a href="tambahakun.php">Tambah User</a></li>

                
            </ul>
          </li>
         
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class=""></i>Tambah Akun</h3>
        <div class="row mt">
          <div class="col-lg-12">
            

 <div class="clearfix"></div>


              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  
                    
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


<?php 
$a=$_POST['menu'];
$b=$_POST['harga']
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.putih {
 color: #FFF;
}
</style>
</head>

<body>
<div align="center">
<form method="POST" action="tampilharga.php">
<p>&nbsp;</p>

  <div class="form-group" align="center">
                        
                     
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     
                      <table class="table table-striped jambo_table bulk_action">
                       



<tr bgcolor="#2f323a">
<td bgcolor="#2f323a" colspan="2">
<div align="center" class="putih">Detail Order</td>
</tr>


<tr>
<td >Nama</td>
<td >&nbsp;
<input type="hidden" name="menu"value="<?php echo"$a"; ?>"> <?php echo"$a"; ?> </td>
</tr>

<tr>
<td >Harga</td>
<td>&nbsp;
<input type="hidden" name="harga" value="<?php echo"$b"; ?>"> <?php echo"$b"; ?> </td>
</tr>



<tr>
<td >Jumlah</td>
<td><input type="number" name="jumlah" value="1"></td>
</tr>



<tr>
<td height="28" bgcolor="#CCCCCC">&nbsp;</td>
<td bgcolor="#CCCCCC">
<input name="" type="submit" value="Melanjutkan Proses" />&nbsp;
<input name="" type="reset" value="Hapus Data Dan Mengulangi" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>



      </div>

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
