
<?php

session_start();
if (!isset($_SESSION['username'])){
header('Location:index.php');
}
?>



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
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>



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




                <tr>
                  <td>
                   
                  </td>
                  <td><?php echo $row['nama_masakan']; ?></td>
                  <td><?php echo number_format($row['harga'], 2); ?></td>
                  <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                  <td><?php echo $_SESSION['qty_array'][$index]; ?></td>
                  <td><?php echo number_format($_SESSION['qty_array'][$index]*$row['harga'], 2); ?></td>
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
<?php 
 $a=$_POST['total'];
       $b=$_POST['bayar'];
       $c=$b-$a;

        ?>

       <tr>
            <td colspan="4" align="right"><b>Biaya Pembayaran </b></td>
            <td><input type="hidden" name="total" value="">
            <?php echo '  '.$_POST['bayar'].'';?></td>
            <td></td>
          </tr>

          <tr>
            <td colspan="4" align="right"><b>Total Belanja</b></td>
            <td><input type="hidden" name="total" value=""><?php echo $_SESSION['checkout'] ; ?></td>
            <td></td>
          </tr>


          <tr>
            <td colspan="4" align="right"><b>Kembalian</b></td>
            <td><input type="hidden" name="bayar"><?php echo 'Rp.'.$c.'';?></td>
            <td></td>
        </tbody>
      </table>

      <a href="detailorder.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
     
      
     
        <a href="cetak.php" class="btn btn-theme03" target="_BLANK">
        <span class="glyphicon glyphicon-check"></span> Print</a>
       
     
      
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






  <script>
		window.print();
	</script>