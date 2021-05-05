<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_news WHERE id_news = $id")->fetch_assoc();

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">News Enamel Indonesia | Dental Clinic</h3>
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
                    Data News
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                          <label for="">Nama</label>
                          <input type="hidden" name="id_news" value="<?= $id; ?>">
                          <input type="text" name="nama_news" class="form-control" value="<?= $dataedit['nama_news']; ?>" >
                      </div>
                      <div class="form-group">
                          <label for="">Keterangan</label>
                          <textarea type="text" id="summernote" style="height: 300px;" name="keterangan_news" class="form-control" ><?php echo $dataedit ['keterangan_news'] ?> </textarea>
                      </div>                     
                      <div class="form-group">
                          <label for="">Foto</label>
                          <input type="file" name="foto_news" class="form-control" value="<?= $dataedit['foto_news'] ?>" >
                          <input type="hidden" name="foto_lama" value="<?= $dataedit['foto']?>">
                      </div>
                      <button type="submit" name="save" class="btn btn-primary">Save</button>
                      <a href="?page=pages/news/view_news" class="btn btn-dark">Close</a>
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

      $originalname = $_FILES['foto_news']['name'];
      $oldname = $_POST['foto_lama'];
      $lokasi = $_FILES['foto_news']['tmp_name'];
      $size = $_FILES['foto_news']['size'];
      $filename = time()."_".$originalname;

        $nama_news = $_POST['nama_news'];
        $keterangan_news = $_POST['keterangan_news'];
       
        if ($size > 1000000){
            echo"<script>
            alert('data Max 1 Mb')
            window.location='?page=pages/news/edit_news&idedit=".$id."'
          </script>";
    }else{
    if (!empty($lokasi)){
        unlink("assets/images/news/".$filename);
        move_uploaded_file($lokasi,"assets/images/news/".$filename);
        $simpan = $con->query("UPDATE tbl_news SET nama_news='$nama_news',keterangan_news='$keterangan_news',foto_news='$filename' WHERE id_news='$id'");
    }else{
        move_uploaded_file($lokasi,"assets/images/news/".$filename);
        $simpan = $con->query("UPDATE tbl_news SET nama_news='$nama_news',keterangan_news='$keterangan_news' WHERE id_news='$id'");
            
    }
      if($simpan == True){
        echo "<script>success_message_edit('index.php?page=pages/news/view_news');
        </script>"; 
      }else{
        echo "<script>error_message_edit('index.php?page=pages/news/view_news');
        </script>";
            }
          }
        } 
  ?>      