<?php
  include('home/header.php')
?>





    <!--main content start-->

<br><br><br><br><br>
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
      <form method="POST" action="save_cart.php">
      <table class="table table-bordered table-striped">
        <thead bgcolor="#2f323a" class="headings">
          <th><font color = "white">Gambar</font></th>
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


                

                
                <tr>
                  <td>
                    <?php echo"<img src='img/makanan/$row[gambar]' width='150'"; ?>
                  </td>
                  <td><?php echo $row['nama_masakan']; ?></td>
                  <td><?php echo number_format($row['harga'], 2); ?></td>
                  <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                  <td><input type="number" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
                  <td><?php echo number_format($_SESSION['qty_array'][$index]*$row['harga'], 2); ?></td>
                  <?php $total += $_SESSION['qty_array'][$index]*$row['harga']; ?>
                <td> <a href="delete_item.php?id_masakan=<?php echo $row['id_masakan']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>

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
            <td><b><?php echo number_format($total, 2); ?></b></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <a href="transaksi.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
      <button type="submit" class="btn btn-success" name="save">Simpan</button>
      <a href="clear_cart.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Kosongkan</a>
      <a href="detailorder.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Checkout</a>
      </form>
      <?php $_SESSION['checkout'] = $total; ?>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
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




