
    <!--main content start-->
<?php
session_start();
  //initialize cart if not set or is unset
if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

  //unset qunatity

?>

<?php
  include('asset/menu.php')
?>


<br>
        
               
                  


      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- left nav here -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <?php 
      if(isset($_SESSION['message'])){
        ?>
        <div class="alert alert-info text-center">
          <?php echo $_SESSION['message']; ?>
        </div>
        <?php
        unset($_SESSION['message']);
      }

      ?>
      <center>
      <form method="POST" action="finish.php">
        <a role="button" href="#" class="btn btn-theme" data-toggle="modal" data-target=".bd-example-modal-lg""> Detail Order</a><br><br>
      <table class="table table-bordered table-striped">
        <thead bgcolor="#2f323a" class="headings">


          <th></th>
          <th><font color = "white">Menu</font></th>
          <th><font color = "white">Harga</font></th>
          <th><font color = "white">Jumlah</font></th>
          <th><font color = "white">Subtotal</font></th>
          <th></th>
        </thead>
        <tbody>
          <?php
            //initialize total
            $total = 0;
            if(!empty($_SESSION['cart'])){
            //connection
            $conn = new mysqli('localhost', 'root', '', 'resto');
            //create array of initail qty which is 1
            $index = 0;
            if(!isset($_SESSION['qty_array'])){
              $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
            }
            $sql = "SELECT * FROM masakan WHERE id_masakan IN (".implode(',',$_SESSION['cart']).")";
            $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
                ?>


                <form action="prosesmenu.php" method="POST">

                <tr>
                  <td>
                  </td>

                  <td> <input type="hidden" name="nama_menu" value="<?php echo $row['nama_masakan']; ?>">
                    <?php echo $row['nama_masakan']; ?>
                  </td>

                  <td>
                    <input type="hidden" name="harga" 
                    value="<?php echo $row['harga']; ?>">
                    <?php echo number_format($row['harga'], 2); ?></td>

                 
                  <td>
                    <input type="hidden" name="jumlah" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>">
                    <?php echo $_SESSION['qty_array'][$index]; ?></td>


                  <td>
                    <input type="hidden"  value="
                    <?php echo number_format($_SESSION['qty_array'][$index]*$row['harga'], 2); ?>">

                    <?php echo number_format($_SESSION['qty_array'][$index]*$row['harga'], 2); ?></td>
                  <?php $total += $_SESSION['qty_array'][$index]*$row['harga']; ?>



                <td> <a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="btn btn-theme btn-sm"><span class="glyphicon glyphicon-check"></span></a></td>

                </tr>
                <?php
                $index ++;
              }
            }
            else{
              ?>
              <tr>
                <td colspan="4" class="text-center">Tidak ada pesanan</td>
              </tr>
              <?php
            }

          ?>

          <tr>
            <td colspan="4" align="right"><b>Total</b></td>
            <td><input type="hidden" name="total" value="<?php echo $_SESSION['checkout'] ; ?>">
            <?php echo $_SESSION['checkout'] ; ?></td>
            <td></td>
          </tr>

          <tr>
            <td colspan="4" align="right">Bayar</td>
            <td><input type="number" name="bayar"></td>
            <td></td>
        </tbody>
      </table>

      <a href="view_cart.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
     
      
      <button type="submit" class="btn btn-success" name="finish">
        <span class="glyphicon glyphicon-check"></span> Checkout</button>

       
     
      </form>
      <?php $_SESSION['checkout'] = $total; ?>

    </div>
  </div>
</div>
</body>
</html>


        
   
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




