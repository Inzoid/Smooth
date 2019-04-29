<?php
include ('home/header.php')

?>



    <!--main content start-->
    <section id="main-content">

      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12">
            
              
<!-- Large modal -->
              <a role="button" href="#" class="btn btn-theme" data-toggle="modal" data-target=".bd-example-modal-lg"">Tambah User</a>



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

<form action="prosesregister.php" method="POST">

         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                      
                     <div class="form-group">
                        
                     
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="id" value="id">
                     </div>
               <br></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" class="form-control col-md-7 col-xs-12" 
                          value="">
                        </div>
                    </div> <br><br>


                <br></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></i> Username
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="username" class="form-control col-md-7 col-xs-12" 
                          value="">
                        </div>
                    </div> <br>

               <br><div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></i> Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="Password" name="password" class="form-control col-md-7 col-xs-12" 
                          value="">
                        </div>
                      </div> <br>



                       <br>
                    
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></i> Level
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                         

                        <select name="id_level" class="form-control col-md-7 col-xs-12">
                          <option >manager</option>
                          <option>kasir</option>
                        </select> </div>
                    </div> <br>

               <br></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></i> Gambar
                        </label>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                           <div class="fileupload fileupload-new" data-provides="fileupload" name="gambar">
                      <div class="fileupload-new thumbnail" name="gambar" style="width: 200px; height: 150px;">
                       <img src="img/coffee-cup.png">
                      </div>

                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>



                      <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>

                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="gambar" />
                        </span><br><br>

                        <button type="submit" class="btn btn-outline-primary">Tambah</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>



                        </div>
                    </div> <br>

</table>

                    </div>
                    <div class="modal-footer">
                    
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
 $tampil=mysqli_query($koneksi, "SELECT *FROM user")or die(mysqli_error());
?>
         

<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr bgcolor="#2f323a" class="headings">
                 
                              
                            <th class="column-title"><font color = "white">ID </th>
                            <th class="column-title"><font color = "white">Username </th>
                            <th class="column-title"><font color = "white">Password </th>


                            <th class="column-title"><font color = "white">Nama </th>
                            <th class="column-title"><font color = "white">Level </th>


                        
                          
                            <th colspan="3"><div style="text-align: center;"><font color = "white">  Aksi</th>

                            </tr>

 <?php
 $no=1;  
   while($data=mysqli_fetch_array($tampil)){
 ?>


                    
          <tr>
            <td class=" "><?php echo"$no"; ?> </td>
            <td class=" "><?php echo"$data[username]"; ?> </td>
            <td class=" "><?php echo"$data[password]"; ?> </td>
            <td class=" "><?php echo"$data[nama]"; ?> </td>
            

           <td> <?php if ($data['id_level']=="manager"): ?>
                <span class="label label-success">&nbsp&nbsp&nbsp<?php echo"$data[id_level]"; ?>&nbsp&nbsp</span>

                <?php else: ?>

                <span class="label label-warning label-mini">
                  kasir
                </span>

              </td>

                

                
              <?php endif ?>
           
                      
               <td><a class="btn btn-theme fa fa-user" href="detailakun.php?id_user=<?php echo $data['id_user']; ?>" data-toggle="modal" data-target="#myModal">&nbsp Detail
                      </td>

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
                      <a class="btn btn-theme04 fa fa-trash-o" onclick="return confirm('Apa Anda Yakin?')" href="hapususer.php?id_user=<?php echo $data['id_user']; ?>">
                      </td>

                      <td >
                  <a class="btn btn-theme fa fa-edit" href="ubahakun.php?id_user=<?php echo $data['id_user']; ?>"> 
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
