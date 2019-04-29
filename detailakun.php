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


</head>

<body>
  
         
    <!--main content start-->



    <?php
  include ("koneksi.php");
  
  $id_user = $_GET['id_user'];
  $ubah = mysqli_query($koneksi, "SELECT * from user where id_user = '$id_user'");
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
                  <h4><?php echo $data['nama'];?></h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                 <?php echo"<img src='img/user/$data[gambar]' width='200' height='150'"; ?>
                </div>
                
                <ul class="pricing">
                  <li><b>ID: <?php echo $data['id_user'];?></b></li>
                  <li><i class="fa fa-user"></i> &nbsp<?php echo $data['username'];?></li>
                  <li><i class="fa fa-cog"></i>  &nbsp<?php echo $data['password'];?></li>
                  <li> <?php if ($data['id_level']=="manager"): ?>
                <span class="label label-success">&nbsp&nbsp&nbsp<?php echo"$data[id_level]"; ?>&nbsp&nbsp</span>

                <?php else: ?>

                <span class="label label-warning label-mini">
                  kasir
                </span>

              

                

                
              <?php endif ?></li>
                  
                  
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



