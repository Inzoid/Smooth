
<?php
include ('home/header.php')

?>
    <!--CSS-->
     <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    

    <!--main content start-->
    <section id="main-content">

      <section class="wrapper site-min-height">
      
        <div class="row mt">
          <div class="col-lg-12">
            
              


<?php
 include("koneksi.php");
 $tampil=mysqli_query($koneksi, "SELECT *FROM transaksi")or die(mysqli_error());
?>
         



 <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">


         

<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr bgcolor="#2f323a" class="headings">
                 
                              
                            <th class="column-title"><font color = "white">ID Order</th>
                            <th class="column-title"><font color = "white">Nama Menu </th>
                            <th class="column-title"><font color = "white">Harga </th>


                            <th class="column-title"><font color = "white">Jumlah </th>
                            <th class="column-title"><font color = "white">Total </th>
                            <th class="column-title"><font color = "white">Kembalian </th>
                            <th class="column-title"><font color = "white">Tanggal </th>

                        
                          
                            <th colspan="3"><div style="text-align: center;"><font color = "white">  Aksi 
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

                            </tr>

 <?php
 $no=1;  
   while($data=mysqli_fetch_array($tampil)){
 ?>


                    
          <tr>

            <td class=" "><?php echo"$data[id_order]"; ?> </td>
            <td class=" "><?php echo"$data[nama_menu]"; ?> </td>
            <td class=" "><?php echo"$data[harga]"; ?></td>
            <td class=" "><?php echo"$data[jumlah]"; ?> </td>
           
                  
              <td class=" "><?php echo"$data[total]"; ?> </td>
               <td class=" "><?php echo"$data[kembalian]"; ?> </td>
              <td class=" "><?php echo"$data[tanggal]"; ?> </td>
                    

                      <td><!--  MODALS -->
            
              <!-- Button trigger modal -->
             
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div></td>



                      <td >
                      <a class="btn btn-theme04 fa fa-trash-o" onclick="return confirm('Apa Anda Yakin?')" href="deletelaporan.php?id_order=<?php echo $data['id_order']; ?>">&nbsp 
                      </td>


                      



                  

          </tr>
 
      <?php
    $no++  ;
    }
    ?>

	 


  <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>
