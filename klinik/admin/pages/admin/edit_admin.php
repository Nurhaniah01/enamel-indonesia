<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_admin WHERE id_admin = $id")->fetch_assoc();

 ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Data Admin Enamel Indosesia | Dental Clinic </h3>
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
                    Data Admin
                </div>
                <div class="card-body">
                <form action="" method="post"
                enctype="multipart/form-data" >
                <div class="form-group">
                <label for="">Username</label>
                <input type="hidden" name="id_admin" value="<?= $id; ?>">
                <input type="text" name="username" class="form-control" value="<?= $dataedit['username']; ?>" >
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control" value="<?= $dataedit['password'] ?>" >
            </div>
            
      <button type="submit" name="save" class="btn btn-primary">Save</button>
      <a href="?page=pages/admin/view_admin" class="btn btn-dark">Close</a>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>

<?php
      if(isset($_POST['save'])){
          $id = $_POST['id_admin'];
          $username  = $_POST['username'];
          $password = $_POST['password'];
          
              $simpan = $con->query("UPDATE tbl_admin SET username='$username', password='$password' WHERE id_admin='$id'");
              
              if($simpan == True){
                  echo "<script>success_message_edit('index.php?page=pages/admin/view_admin');
                        </script>";
              }else{
                echo "<script>error_message_edit('index.php?page=pages/admin/view_admin');
                </script>";
              }
      }
  ?>      