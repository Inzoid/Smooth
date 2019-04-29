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
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
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
      <a href="manager.php" class="logo"><b>INZO<span>ID</span></b></a>
     
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



<form action="prosesregister.php" method="POST">

         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                      
                     <div class="form-group">
                        
                     
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="id" value="id">
                     </div>
               <br></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" class="form-control col-md-7 col-xs-12" 
                          value="">
                        </div>
                    </div> <br><br>


                <br></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><i class="fa fa-user"></i> Username
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="username" class="form-control col-md-7 col-xs-12" 
                          value="">
                        </div>
                    </div> <br><br>

               <br><div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></i> Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="Password" name="password" class="form-control col-md-7 col-xs-12" 
                          value="">
                        </div>
                      </div> <br>



                       <br>
                    
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></i> Level
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                         

                        <select name="id_level" class="form-control col-md-7 col-xs-12">
                          <option >manager</option>
                          <option>kasir</option>
                        </select>

                         <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>

                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="gambar" />
                        </span>

                        



                        </div>
                    </div> <br><br>

                    <br>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <button onclick="window.location.href='index.php'" class="btn btn-theme04" type="button">Cancel</button>
              
                          <input type="submit" id="add-sticky" value="Tambah"  class="btn btn-theme" 
                           href="javascript:;"></button>
                        </div>
                      </div>
          
                        </tbody>
                      </table>
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
   <!--script for this page-->
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>

</body>

</html>
