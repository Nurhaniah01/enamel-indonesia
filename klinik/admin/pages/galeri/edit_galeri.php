<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_galeri WHERE id_galeri = $id")->fetch_assoc();

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gallery Enamel Indonesia | Dental Clinic</h1>
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
                    Koleksi Gallery
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                          <label for="">Nama Foto</label>
                          <input type="hidden" name="id_galeri" value="<?= $id; ?>">
                          <input type="text" name="nama_foto" class="form-control" value="<?= $dataedit['nama_foto']; ?>" >
                      </div>
                                        
                      <div class="form-group">
                          <label for="">Foto</label>
                          <input type="file" name="foto" class="form-control" value="<?= $dataedit['foto'] ?>" >
                          <input type="hidden" name="foto_lama" value="<?= $dataedit['foto']?>">
                      </div>
                      <button type="submit" name="save" class="btn btn-primary">Save</button>
                      <a href="?page=pages/galeri/view_galeri" class="btn btn-dark">Close</a>
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

      $originalname = $_FILES['foto']['name'];
      $oldname = $_POST['foto_lama'];
      $lokasi = $_FILES['foto']['tmp_name'];
      $size = $_FILES['foto']['size'];
      $filename = time()."_".$originalname;

        $nama_foto = $_POST['nama_foto'];
        
        if ($size > 1000000){
            echo"<script>
            alert('data Max 1 Mb')
            window.location='?page=pages/galeri/edit_galeri&idedit=".$id."'
          </script>";
    }else{
    if (!empty($lokasi)){
        unlink("assets/images/lokasi/".$filename);
        move_uploaded_file($lokasi,"assets/images/galeri/".$filename);
        $simpan = $con->query("UPDATE tbl_galeri SET nama_foto='$nama_foto',foto='$filename' WHERE id_galeri='$id'");
    }else{
        move_uploaded_file($lokasi,"assets/images/galeri/".$filename);
        $simpan = $con->query("UPDATE tbl_galeri SET nama_foto='$nama_foto' WHERE id_galeri='$id'");
            
    }
      if($simpan == True){
        echo "<script>success_message_edit('index.php?page=pages/galeri/view_galeri');
        </script>"; 
      }else{
        echo "<script>error_message_edit('index.php?page=pages/galeri/view_galeri');
        </script>";             }
          }
        } 
  ?>      