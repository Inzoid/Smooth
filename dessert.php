<?php
  include('home/menu.php')
?>

  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12">
  

      <?php  $conn = new mysqli('localhost', 'root', '', 'resto');

    $sql = "SELECT * FROM masakan  WHERE kategori = 'desert' ";
    $query = $conn->query($sql);
   
    while($row = $query->fetch_assoc()){
      
     
       ?>          

              
           
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="content-panel pn">
                  <div id="spotify">
                    <center> 

                      

                     <?php echo"<img src='img/makanan/$row[gambar]' width='180'"; ?>
                      </center>
                    <div class="col-xs-4 col-xs-offset-8">
                    </div>


                  

               <div class="row product_name">
                 <div class="row product_name">
                <?php if ($row['status_makanan']=="Tersedia"): ?>
                <span class="label label-success">&nbsp&nbsp&nbsp<?php echo"$row[status_makanan]"; ?>&nbsp&nbsp</span>

                <?php else: ?>

                <span class="label label-danger label-mini">
                  Habis
                </span>

              </td>

                

                
              <?php endif ?>
              </div><br>
              </div><br>

                <div class="col-xs-4 col-xs-offset-8">
                  
                      <a href="add_cart.php?id_masakan=<?php echo $row['id_masakan']; ?>"  class="btn btn-sm btn-clear-g"><b>Add Cart</b></a>
                    </div>

              <div class="row product_name">
                <h4><?php echo $row['nama_masakan']; ?></h4>
              </div>


              
                   



                  </div>
                  <div class="profile-01 centered">

                    <p><a href="add_cart.php?id_masakan=<?php echo $row['id_masakan']; ?>"><font color="white">
                     RP.<?php echo $row['harga']; ?>
                    </font></a></p>
                  </div>

                </div>
              </div>
              <!-- /col-md-4-->

      <?php } ?>



      

  

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
