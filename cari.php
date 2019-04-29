<?php
include ('home/header.php')

?>

<?php
$a = $_POST['carib'];
  include "koneksi.php";
  $tampil = mysqli_query($koneksi,"SELECT * FROM masakan  where nama_masakan like '%".$a."%' ");
  $data=mysqli_fetch_array($tampil);
?>





    <!--main content start-->
    <section id="main-content">

      <section class="wrapper site-min-height">
      
        <div class="row mt">
          <div class="col-lg-12">
            

<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr bgcolor="#2f323a" class="headings">
                 
                              
                            <th class="column-title"><font color = "white">ID </th>
                            <th class="column-title"><font color = "white">Nama Masakan </th>
                            <th class="column-title"><font color = "white">Kategori </th>


                            <th class="column-title"><font color = "white">Harga </th>
                            <th class="column-title"><font color = "white">Status Makanan </th>

                        
                          
                            <th colspan="3"><div style="text-align: center;"><font color = "white">  Opsi
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>



                            </tr>

                            <tr>

            <td class=" "><?php echo"$data[id_masakan]"; ?> </td>
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
                  

                




                      <td >
                      <a class="btn btn-theme04 fa fa-trash-o" onclick="return confirm('Apa Anda Yakin?')" href="proseshapus.php?id_masakan=<?php echo $data['id_masakan']; ?>">&nbsp Hapus
                      </td>


                      <td >
                      <a class="btn btn-theme fa fa-edit"  href="ubahmenu.php?id_masakan=<?php echo $data['id_masakan']; ?>"> Ubah
                      </td>


      <?php
        $no=1;
      {
        
          ;


          $no++;
        }
      ?>
  
  