<section id="services" class="services section-bg" style="background-image: url(assets/img/b.jpg); background-size: 100%;">
      <div class="container">

        <div class="section-title">
          <h2 align=center>Our Services</h2>
          <p>Layanan yang terdapat di Enamel Indonesia Dental Clinic Marapalam</p>
        </div>

        <div class="row">
        <?php 
        $data = $con->query("SELECT * FROM tbl_pelayanan");
        while($pelayanan = $data->fetch_assoc()){
        ?>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="icon-box mb-3" style="min-height: 290px;">
              <img src="klinik/admin/assets/images/pelayanan/<?= $pelayanan['foto_pelayanan']?>"  class="img-fluid">
              <hr>
              <h4 class="title" align=center><a href="?page=info_service&id=<?= $pelayanan['id_pelayanan']?>"><?= $pelayanan['nama_pelayanan'] ?></a></h4>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
</section>