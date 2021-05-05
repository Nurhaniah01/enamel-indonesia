
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Karier Enamel Indonesia | Dental Clinic</h1>
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
                    Data Karier Enamel Indonesia
                </div>
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data Karier</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Karier</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_karier ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_karier'] ?></td>
                        <td><?= $ekstrak['keterangan_karier'] ?></td>
                        <td><a href="?page=pages/karier/edit_karier&idedit=<?= $ekstrak['id_karier'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/karier/hapus_karier&idhapus=<?= $ekstrak['id_karier'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Karier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Karier</label>
                <input type="text" name="nama_karier" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Keterangan</label>
                <textarea type="text" id="summernote" style="height: 300px;" name="keterangan_karier" class="form-control" ></textarea>
            </div>

            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_karier = $_POST['nama_karier'];
                $keterangan_karier = $_POST['keterangan_karier'];

                    $simpan = $con->query("INSERT INTO tbl_karier (nama_karier, keterangan_karier) VALUES ('$nama_karier','$keterangan_karier')");
                    
                    if($simpan == True){
                      echo "<script>success_message_add('index.php?page=pages/karier/view_karier');
                      </script>"; 
                    }else{
                      echo "<script>error_message_add('index.php?page=pages/karier/view_karier');
                      </script>"; 
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
