
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Data Dokter Enamel Indonesia | Dental Clinic</h3>
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
                    Data Dokter
                </div>
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data Dokter</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Dokter</th>
                                <th>Jadwal Praktek</th>
                                <th>Foto Dokter</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_dokter ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_dokter'] ?></td>
                        <td><?= $ekstrak['jadwal_praktek'] ?></td>
                        <td><img src="assets/images/dokter/<?= $ekstrak['foto_dokter'] ?>" width="100" alt=""></td>
                        <td><a href="?page=pages/dokter/edit_dokter&idedit=<?= $ekstrak['id_dokter'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/dokter/hapus_dokter&idhapus=<?= $ekstrak['id_dokter'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Jadwal Praktek</label>
                <textarea type="text" id="summernote" style="height: 300px;" name="jadwal_praktek" class="form-control" ></textarea>
            </div>

            <div class="col form-group">
                <label for="">Foto Dokter</label>
                <input type="file" name="foto_dokter" class="form-control" >
            </div>
            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_dokter = $_POST['nama_dokter'];
                $jadwal_praktek = $_POST['jadwal_praktek'];
                $originalname = $_FILES['foto_dokter']['name'];
                    $lokasi       = $_FILES['foto_dokter']['tmp_name'];
                    $size         = $_FILES['foto_dokter']['size'];
                    $filename     = time()."_".$originalname;

                    $simpan = $con->query("INSERT INTO tbl_dokter (nama_dokter, jadwal_praktek, foto_dokter) VALUES ('$nama_dokter','$jadwal_praktek','$filename')");
                    
                    if($simpan == True){
                        move_uploaded_file($lokasi,'assets/images/dokter/'.$filename);
                        echo "<script>success_message_add('index.php?page=pages/dokter/view_dokter');
                        </script>"; 
                    }else{
                      echo "<script>error_message_add('index.php?page=pages/dokter/view_dokter');
                      </script>"; 
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
