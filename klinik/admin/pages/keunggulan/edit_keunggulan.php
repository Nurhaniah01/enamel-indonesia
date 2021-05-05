<?php
     $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_keunggulan WHERE id_keunggulan = '$id'")->fetch_assoc();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Data Keunggulan Enamel Indonesia | Dental Clinic</h4>
          </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
          
    <div class="content">
      <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Data Keunggulan
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
            <div class="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Keunggulan</label>
                <input type="hidden" name="id_keunggulan" value="<?= $id; ?>">
                <input type="text" name="nama_keunggulan" class="form-control" value="<?= $dataedit['nama_keunggulan']; ?>" >
            </div>

            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" name="ket_keunggulan" class="form-control" value="<?= $dataedit['ket_keunggulan']; ?>" >
            </div>
            
            <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="foto_keunggulan" class="form-control" value="<?= $dataedit['foto_keunggulan'] ?>" >
                <input type="hidden" name="foto_lama" value="<?= $dataedit['foto']?>">
            </div>

        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="?page=pages/keunggulan/view_keunggulan" class="btn btn-dark">Close</a>
      </div>
      </form>
             </div>
         </div>
         </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>


<?php
    if(isset($_POST['save'])){
      
    $originalname = $_FILES['foto_keunggulan']['name'];
    $oldname = $_POST['foto_lama'];
    $lokasi = $_FILES['foto_keunggulan']['tmp_name'];
    $size = $_FILES['foto_keunggulan']['size'];
    $filename = time()."_".$originalname;

      $nama_keunggulan  = $_POST['nama_keunggulan'];
      $ket_keunggulan = $_POST['ket_keunggulan'];
     
      if ($size > 1000000){
        echo"<script>
        alert('data Max 1 Mb')
        window.location='?page=pages/keunggulan/edit_keunggulan&idedit=".$id."'
      </script>";
        }else{
        if (!empty($lokasi)){
            unlink("assets/images/keunggulan/".$filename);
            move_uploaded_file($lokasi,"assets/images/keunggulan/".$filename);
            $simpan = $con->query("UPDATE tbl_keunggulan SET nama_keunggulan='$nama_keunggulan',ket_keunggulan='$ket_keunggulan',foto_keunggulan='$filename' WHERE id_keunggulan='$id'");
        }else{
            move_uploaded_file($lokasi,"assets/images/keunggulan/".$filename);
            $simpan = $con->query("UPDATE tbl_keunggulan SET nama_keunggulan='$nama_keunggulan',ket_keunggulan='$ket_keunggulan' WHERE id_keunggulan='$id'");
                
            }
      if($simpan == True){
        echo "<script>success_message_edit('index.php?page=pages/keunggulan/view_keunggulan');
        </script>"; 
      }else{
        echo "<script>error_message_edit('index.php?page=pages/keunggulan/view_keunggulan');
        </script>";
      }
    }
    }
?>