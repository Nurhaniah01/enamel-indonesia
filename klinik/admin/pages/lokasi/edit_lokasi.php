<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_ket_lokasi WHERE id_lokasi = $id")->fetch_assoc();

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Data Lokasi Enamel Indonesia | Dental Clinic</h3>
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
                    Data Lokasi
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                          <label for="">Nama Lokasi</label>
                          <input type="hidden" name="id_lokasi" value="<?= $id; ?>">
                          <input type="text" name="nama_lokasi" class="form-control" value="<?= $dataedit['nama_lokasi']; ?>" >
                      </div>
                      <div class="form-group">
                          <label for="">Alamat Lokasi</label>
                          <input type="text" name="alamat_lokasi" class="form-control" value="<?= $dataedit['alamat_lokasi'] ?>" >
                      </div>                      
                      <div class="form-group">
                          <label for="">Foto Lokasi</label>
                          <input type="file" name="foto_lokasi" class="form-control" value="<?= $dataedit['foto_lokasi'] ?>" >
                          <input type="hidden" name="foto_lama" value="<?= $dataedit['foto_lokasi']?>">
                      </div>
                      <button type="submit" name="save" class="btn btn-primary">Save</button>
                      <a href="?page=pages/lokasi/view_lokasi" class="btn btn-dark">Close</a>
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

      $originalname = $_FILES['foto_lokasi']['name'];
      $oldname = $_POST['foto_lama'];
      $lokasi = $_FILES['foto_lokasi']['tmp_name'];
      $size = $_FILES['foto_lokasi']['size'];
      $filename = time()."_".$originalname;

        $nama_lokasi = $_POST['nama_lokasi'];
        $alamat_lokasi = $_POST['alamat_lokasi'];
       
        if ($size > 1000000){
            echo"<script>
            alert('data Max 1 Mb')
            window.location='?page=pages/lokasi/edit_lokasi&idedit=".$id."'
          </script>";
    }else{
    if (!empty($lokasi)){
        unlink("assets/images/lokasi/".$filename);
        move_uploaded_file($lokasi,"assets/images/lokasi/".$filename);
        $simpan = $con->query("UPDATE tbl_ket_lokasi SET nama_lokasi='$nama_lokasi',alamat_lokasi='$alamat_lokasi',foto_lokasi='$filename' WHERE id_lokasi='$id'");
    }else{
        move_uploaded_file($lokasi,"assets/images/lokasi/".$filename);
        $simpan = $con->query("UPDATE tbl_ket_lokasi SET nama_lokasi='$nama_lokasi',alamat_lokasi='$alamat_lokasi' WHERE id_lokasi='$id'");
            
    }
      if($simpan == True){
        echo "<script>success_message_edit('index.php?page=pages/lokasi/view_lokasi');
        </script>"; 
      }else{
        echo "<script>error_message_edit('index.php?page=pages/lokasi/view_lokasi');
        </script>";
            }
          }
        } 
  ?>      