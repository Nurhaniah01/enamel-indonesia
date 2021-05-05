<section id="visimisi" class="skills" style="background-image: url(assets/img/p.jpg); background-size: 100%;background-repeat: round;">
      <div class="container">

        <div class="section-title">
          <h2 align=center>Lokasi Enamel Indonesia Dental Clinic</h2>
          
        </div>
<div class="container mt-5 mb-5">
    <div class="row">
    <?php 
        $data = $con->query("SELECT * FROM tbl_ket_lokasi");
        while($lokasi = $data->fetch_assoc()){
    ?>
    <div class="col-md-3">
        <div class="card" style="background-color:lavender; height: 430px;">
            <div class="card-body">
                <img src="klinik/admin/assets/images/lokasi/<?= $lokasi['foto_lokasi']?>" alt="" class="img-fluid" style="height: 260px; width: 200px;">
                <br>
                <br>
                <h4 class="title" align=center>
                    <a href="?page=info_branch&id=<?= $lokasi['id_lokasi'] ?>"><?= $lokasi['nama_lokasi'] ?></a></h4>
            </div>
        </div>
    </div>
    <?php } ?>
   </div>
</div>
</div>
</section>