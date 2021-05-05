
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Testimoni Pasien</h1>
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
                    Data Testimoni Pasien
                </div>
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data Testimoni</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Pasien</th>
                                <th>Alamat Pasien</th>
                                <th>Testimoni</th>
                                <th>Foto Pasien</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_testimoni ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_user'] ?></td>
                        <td><?= $ekstrak['alamat_user'] ?></td>
                        <td><?= $ekstrak['ket_testimoni'] ?></td>
                        <td><img src="assets/images/testimoni/<?= $ekstrak['foto_testimoni'] ?>" width="100" alt=""></td>
                        <td><a href="?page=pages/testimoni/edit_testimoni&idedit=<?= $ekstrak['id_testimoni'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/testimoni/hapus_testimoni&idhapus=<?= $ekstrak['id_testimoni'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Testimoni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Pasien</label>
                <input type="text" name="nama_user" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Alamat Pasien</label>
                <input type="text" name="alamat_user" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Testimoni</label>
                <input type="text" name="ket_testimoni" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Foto Pasien</label>
                <input type="file" name="foto_testimoni" class="form-control" >
            </div>

            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_user = $_POST['nama_user'];
                $alamat_user = $_POST['alamat_user'];
                $ket_testimoni = $_POST['ket_testimoni'];
                $originalname = $_FILES['foto_testimoni']['name'];
                    $lokasi       = $_FILES['foto_testimoni']['tmp_name'];
                    $size         = $_FILES['foto_testimoni']['size'];
                    $filename     = time()."_".$originalname;

                    $simpan = $con->query("INSERT INTO tbl_testimoni (nama_user, alamat_user, ket_testimoni, foto_testimoni) VALUES ('$nama_user','$alamat_user', '$ket_testimoni','$filename')");
                    
                    if($simpan == True){
                      move_uploaded_file($lokasi,'assets/images/testimoni/'.$filename);
                      echo "<script>success_message_add('index.php?page=pages/testimoni/view_testimoni');
                      </script>"; 
                    }else{
                        echo "<script>error_message_add('index.php?page=pages/testimoni/view_testimoni');
                      </script>";
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
