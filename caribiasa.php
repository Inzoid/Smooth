<!DOCTYPE html>
<?php
$a = $_POST['carib'];
	include "koneksi.php";
	$tampil = mysqli_query($koneksi,"SELECT * FROM masakan where nama_masakan like '%".$a."%'  ");
	$data=mysqli_fetch_array($tampil);
?>


				<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Menu</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="" ="icon">
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
      <a href="manager.php" class="logo"><b>INZO<span>ID</span></b> <b>Manager</b></a>
     
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
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/bal.jpeg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Ikhbal</h5>
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
              <li><a href="transaksi.php">Transaksi</a></li>
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
      
        <div class="row mt">
          <div class="col-lg-12">
            
              
<!-- Large modal -->
              <a role="button" href="#" class="btn btn-theme" data-toggle="modal" data-target=".bd-example-modal-lg""> <i class="fa fa-plus"></i> Tambah Menu  </a>



                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">

                  <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title">Tambah Menu</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                   <table>
<tr><td></td></tr>
<form action="prosesmasak.php" method="POST">

<tr class="form-group">
  <input type="text" class="form-control" name="nama_masakan" placeholder="Nama Menu" >
</tr><br>

<tr>
  <input type="text" class="form-control" name="harga" placeholder="Harga">
</tr><br>

                        <tr><select name="status_makanan" class="form-control col-md-7 col-xs-12">
                          <option >Tersedia</option>
                          <option>Tidak Tersedia</option>
                        </select></tr><br>


</table>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary">Tambah</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                    </div>
                  </div>
                  </div>
                </div>

 <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
  


         

<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr bgcolor="#2f323a" class="headings">
                 
                              
                            <th class="column-title"><font color = "white">ID </th>
                            <th class="column-title"><font color = "white">Nama Masakan </th>
                            <th class="column-title"><font color = "white">Kategori </th>


                            <th class="column-title"><font color = "white">Harga </th>
                            <th class="column-title"><font color = "white">Status Makanan </th>

                        
                          
                            <th colspan="2"><div style="text-align: center;"><font color = "white">  Aksi</th>

                            </tr>

 <?php
 $no=1;  
   while($data=mysqli_fetch_array($tampil)){
 ?>


                    
          <tr>

            <td class=" "><?php echo"$data[id_masakan]"; ?> </td>
            <td class=" "><?php echo"$data[nama_masakan]"; ?> </td>
            <td class=" "><?php echo"$data[kategori]"; ?> </td>
            <td class=" "><?php echo"$data[harga]"; ?> </td>
            <td class=" "><?php echo"$data[status_makanan]"; ?> </td>
                
                      <td >
                      <a class="btn btn-theme04 fa fa-trash-o" onclick="return confirm('Apa Anda Yakin?')" href="proseshapus.php?id_masakan=<?php echo $data['id_masakan']; ?>"> Hapus
                      </td>


                      <td >
                      <a class="btn btn-theme fa fa-edit" onclick="return confirm('Apa Anda yakin akan mengubah data ini ?')" href="ubahmenu.php?id_masakan=<?php echo $data['id_masakan']; ?>"> Ubah
                      </td>



                  

          </tr>
 
      <?php
    $no++  ;
    }
    ?>

	 


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
