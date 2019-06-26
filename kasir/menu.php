<?php
session_start();
?>
<?php
  if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

//unset qunatity
unset($_SESSION['qty_array']);

?>

<?php
include("../kasir/asset/menu.php")
?>
  
<!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                       <i class="fa fa-cutlery"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Menu</h2>
                                        <p>Silahkan Pilih Menu</p>
                                      
                                    </div>



                                    <div class="breadcomb-ctn">
                                       <ul class="nav navbar-nav navbar-right">
                        <li><a href="view_cart.php"></span><font color="black"><i class="fa fa-shopping-cart"></i> Cart <span class="badge"><?php echo count($_SESSION['cart']); ?></font></span></a></li>
                    </ul>
                                    </div>

                                    <div class="breadcomb-ctn">
            
                        
                                    </div>

                                    <div class="breadcomb-ctn">
                                       

                                    </div>

                                </div>
                            </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">



<?php
    //info message
    if(isset($_SESSION['message'])){
      ?>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="alert alert-success">
            <?php echo $_SESSION['message']; ?>
          </div>
        </div>
      </div>
      <?php
      unset($_SESSION['message']);
    }


    //connection
    $conn = new mysqli('localhost', 'root', '', 'resto');

     $sql = "SELECT * FROM masakan  WHERE kategori = 'makanan' ";
    $query = $conn->query($sql);
    $inc = 4;
    while($row = $query->fetch_assoc()){
      $inc = ($inc == 4) ? 1 : $inc + 1; 
      if($inc == 1) echo "<div class='row text-center'>";  
      ?>


      <div class="col-sm-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="row product_image">
               <?php echo"<img src='img/makanan/$row[gambar] '" ; ?>
              <img src="<?php echo $row['gambar'] ?>" width="80%" height="auto">
            </div>

            <div class="row product_name">
              <h4><?php echo $row['nama_masakan']; ?></h4>
            </div>

             <div class="row">
                <?php if ($row['status_makanan']=="Tersedia"): ?>
                <span class="label label-success">&nbsp&nbsp&nbsp<?php echo"$row[status_makanan]"; ?>&nbsp&nbsp</span>

                <?php else: ?>

                <span class="label label-danger label-mini">
                  Tidak Tersedia
                </span>

              </td>
                <?php endif ?>
              </div><br>

            <div class="row product_footer">
              
               <?php if ($row['status_makanan']=="Tersedia"): ?>
               <p class="pull-center"><b>Rp.<?php echo  $row['harga']; ?></b></p>
              <span class="pull-center"><a href="add_cart.php?id_masakan=<?php echo $row['id_masakan']; ?>" style="background-color:#00c292;" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Cart</a></span>

                <?php else: ?>

                
                  <p class="pull-center"><b>Rp.<?php echo  $row['harga']; ?></b></p>
              <span class="pull-center"><a href="" class="btn btn-danger btn-sm">Habis</a></span>
<?php endif ?>
            </div>
          </div>
        </div>
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