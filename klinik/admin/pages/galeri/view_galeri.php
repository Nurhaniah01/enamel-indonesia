
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Gallery Enamel Indonesia | Dental Clinic</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
              <li class="breadcrumb-item active">Kembali</li>
            </ol>
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
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Gallery Klinik</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Foto</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_galeri ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_foto'] ?></td>
                        <td><img src="assets/images/galeri/<?= $ekstrak['foto'] ?>" width="100" alt=""></td>
                        <td><a href="?page=pages/galeri/edit_galeri&idedit=<?= $ekstrak['id_galeri'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/galeri/hapus_galeri&idhapus=<?= $ekstrak['id_galeri'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>


  <!-- Modal -->
<div class="modal fade" id="modaltambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Gallery Klinik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Foto</label>
                <input type="text" name="nama_foto" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control" >
            </div>

            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_foto = $_POST['nama_foto'];
                $originalname = $_FILES['foto']['name'];
                    $lokasi       = $_FILES['foto']['tmp_name'];
                    $size         = $_FILES['foto']['size'];
                    $filename     = time()."_".$originalname;

                    $simpan = $con->query("INSERT INTO tbl_galeri (nama_foto, foto) VALUES ('$nama_foto','$filename')");
                    
                    if($simpan == True){
                        move_uploaded_file($lokasi,'assets/images/galeri/'.$filename);
                        echo "<script>success_message_add('index.php?page=pages/galeri/view_galeri');
                        </script>"; 
                      }else{
                        echo "<script>error_message_add('index.php?page=pages/galeri/view_galeri');
                        </script>"; 
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
