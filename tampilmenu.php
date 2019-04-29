
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
            
              
<!-- Large modal -->
              <a role="button" href="#" class="btn btn-theme" data-toggle="modal" data-target=".bd-example-modal-lg""> <i class="fa fa-plus"></i>&nbsp Tambah Menu  </a>



                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">

                  <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title">Tambah Menu</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                   <table>
<tr><td></td></tr>
<form action="prosesmasak.php" method="POST">

<tr class="form-group">
  <input type="text" class="form-control" name="nama_masakan" placeholder="Nama Menu" >
</tr><br>

<tr>
  <input type="text" class="form-control" name="harga" placeholder="Harga">
</tr><br>

                        <tr><select name="status_makanan" class="form-control col-md-7 col-xs-12">
                          <option >Tersedia</option>
                          <option>Tidak Tersedia</option>
                        </select></tr><br><br><br>


                 <tr><select name="kategori" class="form-control col-md-7 col-xs-12">
                          <option >Makanan</option>
                          <option >Minuman</option>
                          <option>Pizza</option>
                          <option >Desert</option>
                        </select></tr><br><br><br>


                

                    <div class="fileupload fileupload-new" data-provides="fileupload" name="gambar">
                     

                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>



                      <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>

                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="gambar" />
                        </span>


<?php
 include("koneksi.php");
 $tampil=mysqli_query($koneksi, "SELECT *FROM masakan")or die(mysqli_error());
?>
         





</table>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary">Tambah</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                    </div>
                  </div>
                  </div>
                </div>

 <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">


  

<?php
 include("koneksi.php");
 $tampil=mysqli_query($koneksi, "SELECT *FROM masakan")or die(mysqli_error());
?>
         

<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr bgcolor="#2f323a" class="headings">
                 
                              
                            <th class="column-title"><font color = "white">ID </th>
                            <th class="column-title"><font color = "white">Nama Masakan </th>
                            <th class="column-title"><font color = "white">Kategori </th>


                            <th class="column-title"><font color = "white">Harga </th>
                            <th class="column-title"><font color = "white">Status Makanan </th>

                        
                          
                            <th colspan="3"><div style="text-align: center;"><font color = "white">  Aksi 
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

                            </tr>

 <?php
 $no=1;  
   while($data=mysqli_fetch_array($tampil)){
 ?>


                    
          <tr>

            <td class=" "><?php echo"$no"; ?> </td>
            <td class=" "><?php echo"$data[nama_masakan]"; ?> </td>
            <td class=" "><?php echo"$data[kategori]"; ?></td>
            <td class=" "><?php echo"$data[harga]"; ?> </td>
            <td class=" ">


            

              <?php if ($data['status_makanan']=="Tersedia"): ?>
                <span class="label label-success">&nbsp&nbsp&nbsp<?php echo"$data[status_makanan]"; ?>&nbsp&nbsp</span>

                <?php else: ?>

                <span class="label label-danger label-mini">
                  Tidak Tersedia
                </span>

              </td>

                

                
              <?php endif ?>
                  

                    

                      <td><!--  MODALS -->
            
              <!-- Button trigger modal -->
              <button class="btn btn-theme fa fa-coffee"  href="detail.php?id_masakan=<?php echo $data['id_masakan']; ?>" data-toggle="modal" data-target="#myModal">
                &nbsp Detail
                </button>
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
                      <a class="btn btn-theme04 fa fa-trash-o" onclick="return confirm('Apa Anda Yakin?')" href="proseshapus.php?id_masakan=<?php echo $data['id_masakan']; ?>">&nbsp 
                      </td>


                      <td >
                      <a class="btn btn-theme fa fa-edit"  href="ubahmenu.php?id_masakan=<?php echo $data['id_masakan']; ?>"> 
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
