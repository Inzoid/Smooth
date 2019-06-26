<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kasir</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
     <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">   
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="header-top-area" style="background-color: #22242a;;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li></li>
                           <li style="margin-top: 20px">
                            
        <form action="cari.php" method="POST">              
          <input type="text" name="carib" class="btn btn-default btn-sm">&nbsp
          <input type="submit" value="Cari" class="btn btn-theme btn-sm">&nbsp&nbsp&nbsp </a>
        </form>

                        </li>
                            <li>

                                <form action="logout.php" method="POST">
                                &nbsp<br><input type="submit" value="Logout" class="btn btn-theme btn-sm"></li>
                            </form>
                            

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->


<!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li>
                            <a href="index.php">
                            <font color="black">
                            <i class="fa fa-home"></i>
                            Home</a></font>
                        </li>

                        <li>
                            <a href="menu.php">
                            <i class="fa fa-cutlery"></i>
                            Makanan</a>
                        </li>

                        <li>
                            <a href="minuman.php">
                            <i class="fa fa-glass"></i>
                            Minuman</a>
                        </li>

                        <li>
                            <a href="desert.php">
                            <i class="fa fa-asterisk"></i>
                            Dessert</a>
                        </li>

                         <li>
                            <a href="daftarmenu.php">
                            <i class="fa fa-archive"></i>
                            Daftar Menu</a>
                        </li>

                         <li>
                            <a href="laporan.php">
                            <i class="fa fa-book"></i>
                            Laporan Penjualan</a>
                        </li>


                        <li><a href="view_cart.php"></span><font color="black"><i class="fa fa-shopping-cart"></i> Cart <span class="badge"><?php echo count($_SESSION['cart']); ?></font></span></a></li>
                   

                         
                                
                            </ul>

                   

