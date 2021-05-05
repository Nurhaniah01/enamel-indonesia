<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_contact WHERE id_contact = $id")->fetch_assoc();

 ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Data Contact Enamel Indonesia | Dental Clinic  </h4>
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
                    Data Contact
                </div>
                <div class="card-body">
                <form action="" method="post"
                enctype="multipart/form-data" >
                <div class="form-group">
                <label for="">Nama Contact</label>
                <input type="hidden" name="id_contact" value="<?= $id; ?>">
                <input type="text" name="nama_contact" class="form-control" value="<?= $dataedit['nama_contact']; ?>" >
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat_contact" class="form-control" value="<?= $dataedit['alamat_contact'] ?>" >
            </div>
            
            <div class="form-group">
                <label for="">No Telp</label>
                <input type="text" name="notelp" class="form-control" value="<?= $dataedit['notelp'] ?>" >
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?= $dataedit['email'] ?>" >
            </div>

      <button type="submit" name="save" class="btn btn-primary">Save</button>
      <a href="?page=pages/contact/view_contact" class="btn btn-dark">Close</a>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>

<?php
      if(isset($_POST['save'])){
          $id = $_POST['id_contact'];
          $nama_contact  = $_POST['nama_contact'];
          $alamat_contact = $_POST['alamat_contact'];
          $notelp = $_POST['notelp'];
          $email = $_POST['email'];
          
              $simpan = $con->query("UPDATE tbl_contact SET nama_contact='$nama_contact', alamat_contact='$alamat_contact', notelp='$notelp', email='$email' WHERE id_contact='$id'");
              
              if($simpan == True){
                echo "<script>success_message_edit('index.php?page=pages/contact/view_contact');
                </script>";  
              }else{
                echo "<script>success_message_edit('index.php?page=pages/contact/view_contact');
                </script>";  
              }
      }
  ?>      