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
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <style>
  .product_image{
    height:200px;
  }
  .product_name{
    height:80px; 
    padding-left:20px; 
    padding-right:20px;
  }
  .product_footer{
    padding-left:20px; 
    padding-right:20px;
  }
</style>

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
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
<br>
<br>
<br>
<br>
<br>

<!--Script PHP list -->

<?php
    //info message
    if(isset($_SESSION['message'])){
      ?>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6">
          <div class="alert alert-info text-center">
            <?php echo $_SESSION['message']; ?>
          </div>
        </div>
      </div>
      <?php
      unset($_SESSION['message']);
    }


    //connection
    $conn = new mysqli('localhost', 'root', '', 'resto');

    $sql = "SELECT * FROM masakan";
    $query = $conn->query($sql);
    $inc = 10;
    while($row = $query->fetch_assoc()){
      $inc = ($inc == 10) ? 1 : $inc + 1; 
      if($inc == 1) echo "<div class='row text-center'>";  
      ?>

<section>
     
     
          <div class="col-lg-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="row product_name">
                  <h4>MEAT LOVERS CHICKEN</h4>
                  <hr>
                </div>
            
                <img src="img/meat.png">
                </div>
                <p>With chicken sausages, chicken luncheon, chicken sticks and savoury mozzarella cheese and a special PHD sauce.</p>
                <ul class="pricing">
                  <li><h3>Rp. 67000</h3></li>
                  <li><input type="number" placeholder="Jumlah" /></li>
                  
                </ul>
                
                <a class="btn btn-theme" href="#">Pesan</a>
              </div>



      <?php
    }
    
    
    //end product row 
    ?>

  </div>


  <style>
    .product_image{
        height:200px;
    }
    .product_name{
        height:80px; 
        padding-left:20px; 
        padding-right:20px;
    }
    .product_footer{
        padding-left:20px; 
        padding-right:20px;
    }
</style>


      
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
