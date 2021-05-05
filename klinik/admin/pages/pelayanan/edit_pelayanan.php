<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_pelayanan WHERE id_pelayanan = $id")->fetch_assoc();

 ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Data Pelayanan Enamel Indonesia | Dental Clinic </h4>
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
          Data Pelayanan
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Nama Pelayanan</label>
              <input type="hidden" name="id_pelayanan" value="<?= $id; ?>">
              <input type="text" name="nama_pelayanan" class="form-control" value="<?= $dataedit['nama_pelayanan']; ?>">
            </div>

            <div class="form-group">
              <label for="">Keterangan</label>
              <textarea type="text" id="summernote" style="height: 300px;" name="keterangan_pelayanan"
                class="form-control"><?php echo $dataedit ['keterangan_pelayanan'] ?> </textarea>
            </div>

            <div class="form-group">
              <label for="">Harga Pelayanan</label>
              <input type="text" name="harga_pelayanan" class="form-control"
                value="<?= $dataedit['harga_pelayanan'] ?>">
            </div>

            <div class="form-group">
              <label for="">Foto</label>
              <input type="file" name="foto_pelayanan" class="form-control" value="<?= $dataedit['foto_pelayanan'] ?>">
            </div>

            <div class="form-group">
              <label for="">Foto Ilustrasi</label>
              <input type="file" name="foto_ilustrasi" class="form-control" value="<?= $dataedit['foto_ilustrasi'] ?>">
            </div>

            <button type="submit" name="save" class="btn btn-primary">Save</button>
            <a href="?page=pages/pelayanan/view_pelayanan" class="btn btn-dark">Close</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

if(isset($_POST['save'])){
      $originalname = $_FILES['foto_pelayanan']['name'];
      $oldname = $_POST['foto_lama'];
      $lokasi = $_FILES['foto_pelayanan']['tmp_name'];
      $size = $_FILES['foto_pelayanan']['size'];
      $filename = time()."_".$originalname;

      $originalname1 = $_FILES['foto_ilustrasi']['name'];
      $oldname1 = $_POST['foto_lama'];
      $lokasi1 = $_FILES['foto_ilustrasi']['tmp_name'];
      $size1 = $_FILES['foto_ilustrasi']['size'];
      $filename1 = time()."_".$originalname1;


      
          $id = $_POST['id_pelayanan'];
          $nama_pelayanan  = $_POST['nama_pelayanan'];
          $keterangan_pelayanan = $_POST['keterangan_pelayanan'];
          $harga_pelayanan  = $_POST['harga_pelayanan'];

          if ($size > 1000000){
            echo"<script>
                alert('data Max 1 Mb')
                window.location='?page=pages/pelayanan/edit_pelayanan&idedit=".$id."'
              </script>";
          }else{
          if (!empty($lokasi && $lokasi1)){
            unlink("assets/images/pelayanan/".$filename);
            move_uploaded_file($lokasi,"assets/images/pelayanan/".$filename);
            unlink("assets/images/pelayanan/".$filename1);
            move_uploaded_file($lokasi1,"assets/images/pelayanan/".$filename1);
            $simpan = $con->query("UPDATE tbl_pelayanan SET nama_pelayanan='$nama_pelayanan',keterangan_pelayanan='$keterangan_pelayanan',harga_pelayanan='$harga_pelayanan',foto_pelayanan='$filename',foto_ilustrasi='$filename1' WHERE id_pelayanan='$id'");
          }elseif (!empty($lokasi) && empty($lokasi1)){
            unlink("assets/images/pelayanan/".$filename);
            move_uploaded_file($lokasi,"assets/images/pelayanan/".$filename);
            $simpan = $con->query("UPDATE tbl_pelayanan SET nama_pelayanan='$nama_pelayanan',keterangan_pelayanan='$keterangan_pelayanan',harga_pelayanan='$harga_pelayanan',foto_pelayanan='$filename' WHERE id_pelayanan='$id'");
          }elseif (empty($lokasi) && !empty($lokasi1)){
            unlink("assets/images/pelayanan/".$filename1);
            move_uploaded_file($lokasi1,"assets/images/pelayanan/".$filename1);
            $simpan = $con->query("UPDATE tbl_pelayanan SET nama_pelayanan='$nama_pelayanan',keterangan_pelayanan='$keterangan_pelayanan',harga_pelayanan='$harga_pelayanan',foto_ilustrasi='$filename1' WHERE id_pelayanan='$id'");
          }else{
              move_uploaded_file($lokasi,"assets/images/pelayanan/".$filename);
              move_uploaded_file($lokasi1,"assets/images/pelayanan/".$filename1);
              $simpan = $con->query("UPDATE tbl_pelayanan SET nama_pelayanan='$nama_pelayanan',keterangan_pelayanan='$keterangan_pelayanan',harga_pelayanan='$harga_pelayanan' WHERE id_pelayanan='$id'");
                  
          }
      if($simpan == True){
        echo "<script>success_message_edit('index.php?page=pages/pelayanan/view_pelayanan');
        </script>"; 
      }else{
        echo "<script>error_message_edit('index.php?page=pages/pelayanan/view_pelayanan');
        </script>";
            }
          }
        } 
  ?>