
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Data Lokasi Enamel Indonesia | Dental Clinic</h3>
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
                    Data Lokasi
                </div>
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data Lokasi</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Lokasi</th>
                                <th>Alamat Lokasi</th>
                                <th>Foto Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_ket_lokasi ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_lokasi'] ?></td>
                        <td><?= $ekstrak['alamat_lokasi'] ?></td>
                        <td><img src="assets/images/lokasi/<?= $ekstrak['foto_lokasi'] ?>" width="100" alt=""></td>
                        <td><a href="?page=pages/lokasi/edit_lokasi&idedit=<?= $ekstrak['id_lokasi'] ?>" class="btn btn-warning btn-sm mb-3"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/lokasi/hapus_lokasi&idhapus=<?= $ekstrak['id_lokasi'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Lokasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Lokasi</label>
                <input type="text" name="nama_lokasi" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Alamat Lokasi</label>
                <input type="text" name="alamat_lokasi" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Foto Lokasi</label>
                <input type="file" name="foto_lokasi" class="form-control" >
            </div>
            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_lokasi = $_POST['nama_lokasi'];
                $alamat_lokasi = $_POST['alamat_lokasi'];
                $originalname = $_FILES['foto_lokasi']['name'];
                    $lokasi       = $_FILES['foto_lokasi']['tmp_name'];
                    $size         = $_FILES['foto_lokasi']['size'];
                    $filename     = time()."_".$originalname;

                    $simpan = $con->query("INSERT INTO tbl_ket_lokasi (nama_lokasi, alamat_lokasi, foto_lokasi) VALUES ('$nama_lokasi','$alamat_lokasi','$filename')");
                    
                    if($simpan == True){
                        move_uploaded_file($lokasi,'assets/images/lokasi/'.$filename);
                        echo "<script>success_message_add('index.php?page=pages/lokasi/view_lokasi');
                      </script>"; 
                    }else{
                      echo "<script>error_message_add('index.php?page=pages/lokasi/view_lokasi');
                      </script>";
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
