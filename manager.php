

<?php
include ('home/header.php');
?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            
            <!--custom chart end-->
            
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="content">
                  <div ><center><img src="img/wp/logo2.jpg"  width="1110" height="80" ></center></div>
                    <div class="col-xs-4 col-xs-offset-8">
                      
                    </div>
                    
                     
                    
                  </div>
                 
                </div>
              </div>
                 
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
            
              <!-- /col-md-4-->
              <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <form action="tampilmenu.php" method="POST">
                <div class="product-panel-2 pn">
                  
                  <img src="img/wp/food.png" width="120"  alt="">
                  <h5 class="mt">Menu Makanan</h5>
                  
<h6>
<?php  $conn = new mysqli('localhost', 'root', '', 'resto');


$sqlCommand = "SELECT COUNT(*) FROM masakan"; 
$query = mysqli_query($conn, $sqlCommand) or die (mysqli_error()); 
$row = mysqli_fetch_row($query);
echo "Total Menu : " . $row[0] ;
mysqli_free_result($query); 
mysqli_close($conn);

?></h6>



              <button class="btn btn-small btn-theme">Menu</button>
                </form>
                </div>
              </div>

              <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <form action="tampiluser.php" method="POST">
                <div class="product-panel-2 pn">
                  
                  <img src="img/user.png" width="120" alt="">
                  <h5 class="mt">Tambah User</h5>
                  


<h6>
<?php  $conn = new mysqli('localhost', 'root', '', 'resto');


$sqlCommand = "SELECT COUNT(*) FROM user"; 
$query = mysqli_query($conn, $sqlCommand) or die (mysqli_error()); 
$row = mysqli_fetch_row($query);
echo "Total User : " . $row[0] ;
mysqli_free_result($query); 
mysqli_close($conn);

?></h6>


                  <button class="btn btn-small btn-theme">Tambah User</button>
                </form>
                </div>
              </div>

              <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="product-panel-2 pn">
                  
                  <br>
                  <img src="img/newspaper.png" width="100" alt="">
                  <h5 class="mt">Laporan Penjualan</h5>
                  <h6>Total Sale : 3,5 Juta </h6>
                  <form action="laporan.php" method="POST">
                  <button class="btn btn-small btn-theme">Laporan</button>
                  </form>
                </div>
              </div>
                <!-- /Message Panel-->
              </div>
              <!-- /col-md-8  -->
            </div>


          </form>
        </div>
      </div>
            
                </div>
              </div>


                
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->


            
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              

 <br>     
  <br>        
   <br>   
    <br>   
    
            
            
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Smooth Pizaa</strong>. All Rights Reserved
        </p>

        <p>
          Jl Sukarasa No 27 Blok Z
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="">Template Mag</a>
        </div>
        <a href="index.html#" class="go-top">
          
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Selamat Datang Manager  ',
        // (string | mandatory) the text inside the notification
        text: 'Silahkan gunakan dengan baik dan benar.',
        // (string | optional) the image to display on the left
        image: 'img/bal.jpeg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
