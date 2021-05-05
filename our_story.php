<section id="team" class="team" style="background-image: url(assets/img/d22.jpg);">
<div class="container mt-5 mb-5">
    <div class="row">
    <?php 
        $data = $con->query("SELECT * FROM tbl_kegiatan");
        while($kegiatan = $data->fetch_assoc()){
    ?>
    <div class="col-md-3">
        <div class="card" style="background-color:lavender;">
            <div class="card-body">
                <img src="klinik/admin/assets/images/kegiatan/<?= $kegiatan['foto_kegiatan']?>" alt="" class="img-fluid" style="height: 200px;">
                <br>
                <br>
                <div class="portfolio-links" align=center>
                  <a href="?page=info_our_story&&id=<?= $kegiatan['id_kegiatan']?>"><u>See More</u></a>
              </div>
            </div>
        </div>
    </div>
    <?php } ?>
   </div>
</div>
</section>