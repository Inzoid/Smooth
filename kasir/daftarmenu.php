<?php
include('../kasir/asset/menu.php')
?>




<?php
 include("koneksi.php");
 $tampil=mysqli_query($koneksi, "SELECT *FROM masakan")or die(mysqli_error());
?>

<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Menu</h2>
                            
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr bgcolor="#2f323a">
                                        <th><font color = "white">Nama Menu</font></th>
                                        <th><font color = "white">Kategori</font></th>
                                        <th><font color = "white">Harga</font></th>
                                        <th><font color = "white">Status</font> Maknanan</th>
                                        <th><font color = "white">Detail</font></th>
                                        
                                    </tr>
                                </thead>


 <?php
 $no=1;  
   while($data=mysqli_fetch_array($tampil)){
 ?>

                                <tbody>
                                    <tr>
                                        <td><?php echo"$data[nama_masakan]"; ?></td>
                                        <td><?php echo"$data[kategori]"; ?></td>
                                        <td><?php echo"$data[harga]"; ?></td>
                                        <td><?php if ($data['status_makanan']=="Tersedia"): ?>
                <span class="label label-success">&nbsp&nbsp&nbsp<?php echo"$data[status_makanan]"; ?>&nbsp&nbsp</span>

                <?php else: ?>

                <span class="label label-danger label-mini">
                  Tidak Tersedia
                </span>

              </td>

                

                
              <?php endif ?></td>
                                        <td>2011/04/25</td>
                                        
                                    </tr>
    <?php
    $no++  ;
    }
    ?>            

							</tbody>

                        	</table>   

                    </div>
                </div>
            </div>

 <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    
		
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
   
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>