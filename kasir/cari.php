<?php
include ('asset/menu.php')

?>

<?php
$a = $_POST['carib'];
  include "koneksi.php";
  $tampil = mysqli_query($koneksi,"SELECT * FROM masakan  where nama_masakan like '%".$a."%' ");
  $row=mysqli_fetch_array($tampil);
?>




<center>
  <div class="col-sm-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="row product_image">
               <?php echo"<img src='img/$row[gambar] '" ; ?>
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
              <span class="pull-center"><a href="" style="background-color:red;" class="btn btn-primary btn-sm">Habis</a></span>
<?php endif ?>
            </div>
          </div>
        </div>
      </div>


     

  </div>

      <?php
        $no=1;
      {
        
          ;


          $no++;
        }
      ?>
  
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