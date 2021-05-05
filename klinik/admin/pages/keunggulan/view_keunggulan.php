
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Data Keunggulan Enamel Indonesia | Dental Clinic</h4>
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
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_keunggulan ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_keunggulan'] ?></td>
                        <td><?= $ekstrak['ket_keunggulan'] ?></td>
                        <td><img src="assets/images/keunggulan/<?= $ekstrak['foto_keunggulan'] ?>" width="100" alt=""></td>
                        <td><a href="?page=pages/keunggulan/edit_keunggulan&idedit=<?= $ekstrak['id_keunggulan'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/keunggulan/hapus_keunggulan&idhapus=<?= $ekstrak['id_keunggulan'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama_keunggulan" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Keterangan</label>
                <input type="text" name="ket_keunggulan" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Gambar</label>
                <input type="file" name="foto_keunggulan" class="form-control" >
            </div>
            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_keunggulan = $_POST['nama_keunggulan'];
                $ket_keunggulan = $_POST['ket_keunggulan'];
                $originalname = $_FILES['foto_keunggulan']['name'];
                    $lokasi       = $_FILES['foto_keunggulan']['tmp_name'];
                    $size         = $_FILES['foto_keunggulan']['size'];
                    $filename     = time()."_".$originalname;
                
                    $simpan = $con->query("INSERT INTO tbl_keunggulan (nama_keunggulan, ket_keunggulan, foto_keunggulan) VALUES ('$nama_keunggulan','$ket_keunggulan','$filename')");
                    
                    if($simpan == True){
                      move_uploaded_file($lokasi,'assets/images/keunggulan/'.$filename);
                      echo "<script>success_message_add('index.php?page=pages/keunggulan/view_keunggulan');
                      </script>"; 
                    }else{
                      echo "<script>error_message_add('index.php?page=pages/keunggulan/view_keunggulan');
                      </script>";
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
