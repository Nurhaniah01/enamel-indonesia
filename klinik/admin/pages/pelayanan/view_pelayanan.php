<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Data Pelayanan Enamel Indonesia | Dental Clinic</h4>
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
                    Data Pelayanan Dental Clinic
                </div>
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data Pelayanan</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Pelayanan</th>
                                <th>Keterangan Pelayanan</th>
                                <th>Harga Pelayanan</th>
                                <th>Foto Pelayanan</th>
                                <th>Foto Ilustrasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_pelayanan ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_pelayanan'] ?></td>
                        <td><?= $ekstrak['keterangan_pelayanan'] ?></td>
                        <td><?= $ekstrak['harga_pelayanan'] ?></td>
                        <td><img src="assets/images/pelayanan/<?= $ekstrak['foto_pelayanan'] ?>" width="100" alt=""></td>
                        <td><img src="assets/images/pelayanan/<?= $ekstrak['foto_ilustrasi'] ?>" width="100" alt=""></td>
                        <td><a href="?page=pages/pelayanan/edit_pelayanan&idedit=<?= $ekstrak['id_pelayanan'] ?>" class="btn btn-warning btn-sm mb-3"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/pelayanan/hapus_pelayanan&idhapus=<?= $ekstrak['id_pelayanan'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Pelayanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" enctype="multipart/form-data">
            <div class="form-group" >
                <label for="">Nama Pelayanan</label>
                <input type="text" name="nama_pelayanan" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Keterangan</label>
                <textarea type="text" id="summernote" style="height: 300px;" name="keterangan_pelayanan" class="form-control" ></textarea>
            </div>

            <div class="col form-group">
                <label for="">Harga Pelayanan</label>
                <input type="number" name="harga_pelayanan" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Foto</label>
                <input type="file" name="foto_pelayanan" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Foto Ilustrasi</label>
                <input type="file" name="foto_ilustrasi" class="form-control" >
            </div>
            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_pelayanan = $_POST['nama_pelayanan'];
                $keterangan_pelayanan = $_POST['keterangan_pelayanan'];
                $harga_pelayanan = $_POST['harga_pelayanan'];
                $originalname = $_FILES['foto_pelayanan']['name'];
                    $lokasi       = $_FILES['foto_pelayanan']['tmp_name'];
                    $size         = $_FILES['foto_pelayanan']['size'];
                    $filename     = time()."_".$originalname;
                
                $originalname1 = $_FILES['foto_ilustrasi']['name'];
                    $lokasi1       = $_FILES['foto_ilustrasi']['tmp_name'];
                    $size1         = $_FILES['foto_ilustrasi']['size'];
                    $filename1     = time()."_".$originalname1;


                    $simpan = $con->query("INSERT INTO tbl_pelayanan (nama_pelayanan, keterangan_pelayanan, harga_pelayanan, foto_pelayanan, foto_ilustrasi) VALUES ('$nama_pelayanan','$keterangan_pelayanan','$harga_pelayanan','$filename','$filename1')");
                    
                    if($simpan == True){
                        move_uploaded_file($lokasi,'assets/images/pelayanan/'.$filename);
                        move_uploaded_file($lokasi1,'assets/images/pelayanan/'.$filename1);
                        echo "<script>success_message_add('index.php?page=pages/pelayanan/view_pelayanan');
                      </script>"; 
                    }else{
                        echo "<script>error_message_add('index.php?page=pages/pelayanan/view_pelayanan');
                      </script>";
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
