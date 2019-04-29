<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Detail</title>

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
  
         
        <!-- sidebar menu end-->

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


    

              <!-- end custombox -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-10 col-md-9 col-sm-6 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4><?php echo $data['nama_masakan'];?></h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                 <?php echo"<img src='img/makanan/$data[gambar]'"; ?>
                </div>
                
                <ul class="pricing">
                  <li><b>ID: <?php echo $data['id_masakan'];?></li>
                  <li>

                     <?php if ($data['status_makanan']=="Tersedia"): ?>
                <span class="label label-success">&nbsp&nbsp&nbsp<?php echo"$data[status_makanan]"; ?>&nbsp&nbsp</span>

                <?php else: ?>

                <span class="label label-danger label-mini">
                  Tidak Tersedia
                </span>

                <?php endif ?>

                  </li>
                  <li><?php echo $data['kategori'];?></li>
                  <li><h3>Rp.<?php echo $data['harga'];?></h3></li>
                  
                  
                </ul>
                <a class="btn btn-theme" href="daftarmenu.php">Pesan</a>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                    </div>
              </div>
              <!-- end custombox -->
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

 <?php
          }
        ?>



