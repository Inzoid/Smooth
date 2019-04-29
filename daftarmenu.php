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

<style type="text/css">
  input {
  box-sizing: border-box;
  width: 110%;
 
  border: 0.11em solid #4ECDC4;
  border-radius: 0.9em;
  text-align: center;
}

::-webkit-input-placeholder {
   color: #22242a;
   text-align: center;

}

:-moz-placeholder {
   color: #22242a;
   text-align: center;

}
</style>

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

       
         <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li>&nbsp</li>
         
          <li>
              <form action="daftarmenu.php" method="POST">

            <input type="submit" class="btn btn-theme" value="Makanan"></button>
          </form>
          </li>

          <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>

           <li>
              <form action="minuman.php" method="POST">
            <input type="submit" class="btn btn-theme" value="Minuman"></button>
          </li>

           <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
          
           <li>
              <form action="desert.php" method="POST">
            <input type="submit" class="btn btn-theme" value="Desert"></button>
          </li>
         




    

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
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>MEAT LOVERS CHICKEN</h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                <img src="img/meat.png">
                </div>
                <p>With chicken sausages, chicken luncheon, chicken sticks and savoury mozzarella cheese and a special PHD sauce.</p>
                <ul class="pricing">
                  <li><h3>Rp. 67000</h3></li>
                  <li><input type="number" placeholder="Jumlah" /></li>
                  
                </ul>
                
                <a class="btn btn-theme" href="#">Pesan</a>
              </div>
              <!-- end custombox -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>POCKET BITES PIZZA</h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                 <img src="img/pizza.png">
                </div>
                <p>Pizza with Smoked Beef Strips topping & Mozzarella Cheese completed with 4 toppings </p>
                <ul class="pricing">
                  <li><h3>Rp. 70000</h3></li>
                  <li><input type="number" placeholder="Jumlah" /></li>
                  
                </ul>
                <a class="btn btn-theme" href="#">Pesan</a>
              </div>
              <!-- end custombox -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>SUPER SUPREME</h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                  <img src="img/supreme.png">
                </div>
                <p>With chicken luncheon, smoked beef, meat and beef burger, mushroom, pineapple, red & green bell pepper, mozzarella cheese and a </p>
                <ul class="pricing">
                  <li><h3>RP.67000</h3></li>
                  <li><input type="number" placeholder="Jumlah" /></li>
                  
                </ul>
                <a class="btn btn-theme" href="#">Pesan</a>
              </div>
</div>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>SUPER SUPREME</h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                  <img src="img/chiken.png">
                </div>
                <p>With chicken luncheon, smoked beef, meat and beef burger, mushroom, pineapple, red & green bell pepper, mozzarella cheese and a </p>
                <ul class="pricing">
                  <li>150 Mb Storage</li>
                  <li>1 Domain</li>
                  
                </ul>
                <a class="btn btn-theme" href="#">Order Now</a>
              </div>
              <!-- end custombox -->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>SUPER SUPREME</h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                  <img src="img/chicken_boneless_thigh.png">
                </div>
                <p>With chicken luncheon, smoked beef, meat and beef burger, mushroom, pineapple, red & green bell pepper, mozzarella cheese and a </p>
                <ul class="pricing">
                  <li>150 Mb Storage</li>
                  <li>1 Domain</li>
                  
                </ul>
                <a class="btn btn-theme" href="#">Order Now</a>
              </div>
            <!-- end col-4 -->
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="custom-box">
                <div class="servicetitle">
                  <h4>SUPER SUPREME</h4>
                  <hr>
                </div>
                <div class="icn-main-container">
                  <img src="img/Chicken_Wingstreet_6-pcs_Menu_item_new.png">
                </div>
                <p>With chicken luncheon, smoked beef, meat and beef burger, mushroom, pineapple, red & green bell pepper, mozzarella cheese and a </p>
                <ul class="pricing">
                  <li>150 Mb Storage</li>
                  <li>1 Domain</li>
                  
                </ul>
                <a class="btn btn-theme" href="#">Order Now</a>
              </div>
        </div>
        <!--  /row -->
      </section>
      <!-- /wrapper -->
    </section>











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
