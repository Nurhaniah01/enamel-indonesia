
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Data Contact Enamel Indonesia | Dental Clinic</h4>
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
                    Data Contact Us
                </div>
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#modaltambahdata" class="btn btn-primary mb-3" >Tambah Data Contact</button>
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Contact</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $data = $con->query("SELECT * FROM tbl_contact ");
                    $no = 1;
                    
                    while($ekstrak = $data->fetch_assoc()){
                       
                ?>
                    <tr>
                  
                        <td><?= $no ++;?></td>
                        <td><?= $ekstrak['nama_contact'] ?></td>
                        <td><?= $ekstrak['alamat_contact'] ?></td>
                        <td><?= $ekstrak['notelp'] ?></td>
                        <td><?= $ekstrak['email'] ?></td>
                        <td><a href="?page=pages/contact/edit_contact&idedit=<?= $ekstrak['id_contact'] ?>" class="btn btn-warning btn-sm mb-3"><i class="fa fa-edit"></i></a>
                            <a href="?page=pages/contact/hapus_contact&idhapus=<?= $ekstrak['id_contact'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Contact</label>
                <input type="text" name="nama_contact" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat_contact" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">No Telp</label>
                <input type="text" name="notelp" class="form-control" >
            </div>

            <div class="col form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" >
            </div>

            <div align="right">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <button type="submit" name="close" class="btn btn-secondary">Close</button>
            </div>

        </form>
        <?php
            if(isset($_POST['save'])){
                
                $nama_contact = $_POST['nama_contact'];
                $alamat_contact = $_POST['alamat_contact'];
                $notelp = $_POST['notelp'];
                $email = $_POST['email'];


                    $simpan = $con->query("INSERT INTO tbl_contact (nama_contact, alamat_contact, notelp, email) VALUES ('$nama_contact','$alamat_contact','$notelp','$email')");
                    
                    if($simpan == True){
                      echo "<script>success_message_add('index.php?page=pages/contact/view_contact');
                        </script>";  
                    }else{
                      echo "<script>error_message_add('index.php?page=pages/contact/view_contact');
                      </script>";  
                    }
            }
        ?>
      </div>
    </div>
  </div>
</div>
