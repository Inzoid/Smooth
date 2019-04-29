<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Tambah Akun</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
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



    <?php
  include ("koneksi.php");
  
  $id = $_GET['id_masakan'];
  $ubah = mysqli_query($koneksi, "SELECT * from masakan where id_masakan = '$id'");
  ?>

<table align="center" border="1">
<form action="prosesubah.php" method="POST">

 <?php
          while($data = mysqli_fetch_array($ubah)){
        ?>

    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class=""></i>Ubah Menu</h3>
        <div class="row mt">
          <div class="col-lg-12">
            

<div class="form-panel">
              <div class=" form">
                  
                    
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

              <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="id" value="id">
                    </div>
               <br></div>

                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ID Menu
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="hidden" name="id_masakan" value="<?php echo $data['id_masakan'];?>"><?php echo $data['id_masakan'];?>
                      </div>
                  </div> <br>

                     
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="id" value="id">
                     </div>
               <br></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Menu
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_masakan" class="form-control col-md-7 col-xs-12" value="<?php echo $data['nama_masakan'];?>">
                        </div>
                    </div> <br>


                <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></i> Harga
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="harga" class="form-control col-md-7 col-xs-12" value="<?php echo $data['harga'];?>">
                        </div>
                    </div> <br><br>

              

                       
                    
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></i> Kategori
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >


                        <select name="kategori" class="form-control col-md-7 col-xs-12" 
                         value="<?php echo $data['kategori'];?>">
                          <option >Makanan</option>
                          <option>Minuman</option>
                          <option>Pizza</option>
                          <option >Desert</option>
                        </select>
                      </div><br><br>
                       

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" > <br>Status Makanan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" ><br>
  

                        <select name="status_makanan" class="form-control col-md-7 col-xs-12">
                          <option >Tersedia</option>
                          <option>Tidak Tersedia</option>

                        </select>
                      </div>
                    </div>

                    </div>
                  <br><br>

                    <br>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> <br>Gambar
                        </label>
                       

                      <label name="gambar" value="<?php echo $data['gambar'];?> class="form-control col-md-7 col-xs-12">
                
                         
                     

                    <div class="fileupload fileupload-new" data-provides="fileupload" name="gambar">
                      <div class="fileupload-new thumbnail" name="gambar" style="width: 200px; height: 150px;">
                       <?php echo"<img src='img/makanan/$data[gambar]'"; ?> />
                      </div>

                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>



                      <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>

                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="gambar" />
                        </span>
                     
                  

                           <br>
                           <br>
              
                          <input type="submit" value="Ubah" onclick="return confirm('Apa Anda yakin akan mengubah data ini ?')" class="btn btn-theme"></button>

                          <button onclick="window.location.href='tampilmenu.php'" class="btn btn-theme04" type="button">Cancel</button>
                        </div>
                      </div>
          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <

   
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>

 <?php
          }
        ?>