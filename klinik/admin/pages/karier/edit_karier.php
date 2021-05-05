<?php $id = $_GET['idedit'];
    $dataedit = $con->query("SELECT * FROM tbl_karier WHERE id_karier = $id")->fetch_assoc();

 ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Karier Enamel Indonesia | Dental Clinic  </h1>
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
                    Data Karier
                </div>
                <div class="card-body">
                <form action="" method="post"
                enctype="multipart/form-data" >
                <div class="form-group">
                <label for="">Nama Karier</label>
                <input type="hidden" name="id_karier" value="<?= $id; ?>">
                <input type="text" name="nama_karier" class="form-control" value="<?= $dataedit['nama_karier']; ?>" >
            </div>

            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea type="text" id="summernote" style="height: 300px;" name="keterangan_karier" class="form-control" ><?php echo $dataedit ['keterangan_karier'] ?> </textarea>
            </div>
            
      <button type="submit" name="save" class="btn btn-primary">Save</button>
      <a href="?page=pages/karier/view_karier" class="btn btn-dark">Close</a>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>

<?php
      if(isset($_POST['save'])){
          $id = $_POST['id_karier'];
          $nama_karier  = $_POST['nama_karier'];
          $keterangan_karier = $_POST['keterangan_karier'];
          
              $simpan = $con->query("UPDATE tbl_karier SET nama_karier='$nama_karier', keterangan_karier='$keterangan_karier' WHERE id_karier='$id'");
              
              if($simpan == True){
                echo "<script>success_message_edit('index.php?page=pages/karier/view_karier');
                </script>"; 
              }else{
                echo "<script>error_message_edit('index.php?page=pages/karier/view_karier');
                </script>"; 
              }
      }
  ?>      