<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_kegiatan WHERE id_kegiatan = $id")->fetch_assoc();

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Data Kegiatan Enamel Indonesia | Dental Clinic</h4>
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
                    Data Kegiatan
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                          <label for="">Nama Kegiatan</label>
                          <input type="hidden" name="id_kegiatan" value="<?= $id; ?>">
                          <input type="text" name="nama_kegiatan" class="form-control" value="<?= $dataedit['nama_kegiatan']; ?>" >
                      </div>
                      <div class="form-group">
                          <label for="">Keterangan Kegiatan</label>
                          <textarea type="text" id="summernote" style="height: 300px;" name="keterangan_kegiatan" class="form-control" ><?php echo $dataedit ['keterangan_kegiatan'] ?> </textarea>
                     </div>                     
                      <div class="form-group">
                          <label for="">Foto Kegiatan</label>
                          <input type="file" name="foto_kegiatan" class="form-control" value="<?= $dataedit['foto_kegiatan'] ?>" >
                          <input type="hidden" name="foto_lama" value="<?= $dataedit['foto']?>">
                      </div>
                      <button type="submit" name="save" class="btn btn-primary">Save</button>
                      <a href="?page=pages/kegiatan/view_kegiatan" class="btn btn-dark">Close</a>
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

      $originalname = $_FILES['foto_kegiatan']['name'];
      $oldname = $_POST['foto_lama'];
      $lokasi = $_FILES['foto_kegiatan']['tmp_name'];
      $size = $_FILES['foto_kegiatan']['size'];
      $filename = time()."_".$originalname;

        $nama_kegiatan = $_POST['nama_kegiatan'];
        $keterangan_kegiatan = $_POST['keterangan_kegiatan'];
       
        if ($size > 1000000){
            echo"<script>
            alert('data Max 1 Mb')
            window.location='?page=pages/kegiatan/edit_kegiatan&idedit=".$id."'
          </script>";
    }else{
    if (!empty($lokasi)){
        unlink("assets/images/kegiatan/".$filename);
        move_uploaded_file($lokasi,"assets/images/kegiatan/".$filename);
        $simpan = $con->query("UPDATE tbl_kegiatan SET nama_kegiatan='$nama_kegiatan',keterangan_kegiatan='$keterangan_kegiatan',foto_kegiatan='$filename' WHERE id_kegiatan='$id'");
    }else{
        move_uploaded_file($lokasi,"assets/images/kegiatan/".$filename);
        $simpan = $con->query("UPDATE tbl_kegiatan SET nama_kegiatan='$nama_kegiatan',keterangan_kegiatan='$keterangan_kegiatan' WHERE id_kegiatan='$id'");
            
    }
      if($simpan == True){
        echo "<script>success_message_edit('index.php?page=pages/kegiatan/view_kegiatan');
        </script>"; 
      }else{
        echo "<script>error_message_edit('index.php?page=pages/kegiatan/view_kegiatan');
        </script>"; 

            }
          }
        } 
  ?>      