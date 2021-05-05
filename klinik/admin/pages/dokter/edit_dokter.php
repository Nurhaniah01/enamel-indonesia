<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_dokter WHERE id_dokter = $id")->fetch_assoc();

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Data Dokter Enamel Indonesia | Dental Clinic</h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Data Dokter
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                          <label for="">Nama Dokter</label>
                          <input type="hidden" name="id_dokter" value="<?= $id; ?>">
                          <input type="text" name="nama_dokter" class="form-control" value="<?= $dataedit['nama_dokter']; ?>" >
                      </div>
                      <div class="form-group">
                          <label for="">Jadwal Praktek</label>
                          <textarea type="text" id="summernote" style="height: 300px;" name="jadwal_praktek" class="form-control" ><?php echo $dataedit ['jadwal_praktek'] ?> </textarea>
                      </div>                     
                      <div class="form-group">
                          <label for="">Foto Dokter</label>
                          <input type="file" name="foto_dokter" class="form-control" value="<?= $dataedit['foto_dokter'] ?>" >
                          <input type="hidden" name="foto_lama" value="<?= $dataedit['foto']?>">
                      </div>
                      <button type="submit" name="save" class="btn btn-primary">Save</button>
                      <a href="?page=pages/dokter/view_dokter" class="btn btn-dark">Close</a>
                  </form>
                </div>
             </div>
         </div>
     <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
 <!-- /.content -->
 <?php
    if(isset($_POST['save'])){

      $originalname = $_FILES['foto_dokter']['name'];
      $oldname = $_POST['foto_lama'];
      $lokasi = $_FILES['foto_dokter']['tmp_name'];
      $size = $_FILES['foto_dokter']['size'];
      $filename = time()."_".$originalname;

        $nama_dokter = $_POST['nama_dokter'];
        $jadwal_praktek = $_POST['jadwal_praktek'];
       
        if ($size > 1000000){
            echo"<script>
            alert('data Max 1 Mb')
            window.location='?page=pages/dokter/edit_dokter&idedit=".$id."'
          </script>";
    }else{
    if (!empty($lokasi)){
        unlink("assets/images/dokter/".$filename);
        move_uploaded_file($lokasi,"assets/images/dokter/".$filename);
        $simpan = $con->query("UPDATE tbl_dokter SET nama_dokter='$nama_dokter',jadwal_praktek='$jadwal_praktek',foto_dokter='$filename' WHERE id_dokter='$id'");
    }else{
        move_uploaded_file($lokasi,"assets/images/dokter/".$filename);
        $simpan = $con->query("UPDATE tbl_dokter SET nama_dokter='$nama_dokter',jadwal_praktek='$jadwal_praktek' WHERE id_dokter='$id'");
            
    }
      if($simpan == True){
        echo "<script>success_message_edit('index.php?page=pages/dokter/view_dokter');
        </script>"; 
      }else{
        echo "<script>error_message_edit('index.php?page=pages/dokter/view_dokter');
        </script>"; 
            }
          }
        } 
  ?>      