
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">News Enamel Indonesia | Dental Clinic</h4>
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
                    Data News
                </div>
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_news ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_news'] ?></td>
                        <td><?= $ekstrak['keterangan_news'] ?></td>
                        <td><img src="assets/images/news/<?= $ekstrak['foto_news'] ?>" width="100" alt=""></td>
                        <td><a href="?page=pages/news/edit_news&idedit=<?= $ekstrak['id_news'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/news/hapus_news&idhapus=<?= $ekstrak['id_news'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
                <input type="text" name="nama_news" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Keterangan</label>
                <textarea type="text" id="summernote" style="height: 300px;" name="keterangan_news" class="form-control" ></textarea>
            </div>

            <div class="col form-group">
                <label for="">Foto</label>
                <input type="file" name="foto_news" class="form-control" >
            </div>
            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_news = $_POST['nama_news'];
                $keterangan_news = $_POST['keterangan_news'];
                $originalname = $_FILES['foto_news']['name'];
                    $lokasi       = $_FILES['foto_news']['tmp_name'];
                    $size         = $_FILES['foto_news']['size'];
                    $filename     = time()."_".$originalname;

                    $simpan = $con->query("INSERT INTO tbl_news (nama_news, keterangan_news, foto_news) VALUES ('$nama_news','$keterangan_news','$filename')");
                    
                    if($simpan == True){
                        move_uploaded_file($lokasi,'assets/images/news/'.$filename);
                        echo "<script>success_message_add('index.php?page=pages/news/view_news');
                      </script>"; 
                    }else{
                      echo "<script>error_message_add('index.php?page=pages/news/view_news');
                      </script>";
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
