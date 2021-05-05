
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Kritik dan Saran Pasien Enamel Indonesia</h4>
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
                    Kritik dan Saran
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <td>No</td>
                                <th>Nama Pasien</th>
                                <th>Email</th>
                                <th>Keterangan</th>
                                <th>Kritik & Saran</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $data = $con->query("SELECT * FROM tbl_saran ");
                        $no = 1;
                        while($ekstrak = $data->fetch_assoc()){
                        ?>
                 <tr>
                  
                  <td><?= $no ++;?></td>
                  <td><?= $ekstrak['name'] ?></td>
                  <td><?= $ekstrak['email'] ?></td>
                  <td><?= $ekstrak['subject'] ?></td>
                  <td><?= $ekstrak['message'] ?></td>
                  </td>
                    </tr>
                <?php } ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
     <!-- /.content -->
  </div>
