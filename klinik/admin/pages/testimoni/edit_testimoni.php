<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_testimoni WHERE id_testimoni = $id")->fetch_assoc();

 ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Testimoni Pasien</h1>
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
                    Data Testimoni Pasien
                </div>
                <div class="card-body">
                <form action="" method="post"
                enctype="multipart/form-data" >
                <div class="form-group">
                <label for="">Nama Pasien</label>
                <input type="hidden" name="id_testimoni" value="<?= $id; ?>">
                <input type="text" name="nama_user" class="form-control" value="<?= $dataedit['nama_user']; ?>" >
            </div>

            <div class="form-group">
                <label for="">Alamat Pasien</label>
                <input type="text" name="alamat_user" class="form-control" value="<?= $dataedit['alamat_user'] ?>" >
            </div>
            
            <div class="form-group">
                <label for="">Testimoni</label>
                <input type="text" name="ket_testimoni" class="form-control" value="<?= $dataedit['ket_testimoni'] ?>" >
            </div>

            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto_testimoni" class="form-control" value="<?= $dataedit['foto_testimoni'] ?>" >
            </div>

      <button type="submit" name="save" class="btn btn-primary">Save</button>
      <a href="?page=pages/testimoni/view_testimoni" class="btn btn-dark">Close</a>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>

<?php
      if(isset($_POST['save'])){
        $originalname = $_FILES['foto_testimoni']['name'];
        $oldname = $_POST['foto_lama'];
        $lokasi = $_FILES['foto_testimoni']['tmp_name'];
        $size = $_FILES['foto_testimoni']['size'];
        $filename = time()."_".$originalname;

          $id = $_POST['id_testimoni'];
          $nama_user  = $_POST['nama_user'];
          $alamat_user = $_POST['alamat_user'];
          $ket_testimoni = $_POST['ket_testimoni'];
          
          if ($size > 1000000){
            echo"<script>
            alert('data Max 1 Mb')
            window.location='?page=pages/testimoni/edit_testimoni&idedit=".$id."'
          </script>";
          }else{
          if (!empty($lokasi)){
              unlink("assets/images/testimoni/".$filename);
              move_uploaded_file($lokasi,"assets/images/testimoni/".$filename);
              $simpan = $con->query("UPDATE tbl_testimoni SET nama_user='$nama_user', alamat_user='$alamat_user', ket_testimoni='$ket_testimoni',foto_testimoni='$filename' WHERE id_testimoni='$id'");
          }else{
              move_uploaded_file($lokasi,"assets/images/testimoni/".$filename);
              $simpan = $con->query("UPDATE tbl_testimoni SET nama_user='$nama_user',alamat_user='$alamat_user',ket_testimoni='$ket_testimoni' WHERE id_testimoni='$id'");
            
    }
              if($simpan == True){
                echo "<script>success_message_edit('index.php?page=pages/testimoni/view_testimoni');
                </script>"; 
              }else{
                  echo "<script>error_message_edit('index.php?page=pages/testimoni/view_testimoni');
                </script>";
              }
      }
    }
  ?>      