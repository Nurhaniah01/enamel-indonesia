<section id="team" class="team" style="background-image: url(assets/img/k.jpeg);">
<div class="container">
        <br>
        <div class="section-title">
            <h2 align=center>Career Enamel Indonesia | Dental Clinic</h2>
        </div>

        <div class="row">
        <?php 
        $data = $con->query("SELECT * FROM tbl_karier");
        while($karier = $data->fetch_assoc()){
        ?>
        
           <div class="col-lg-6">
            <div class="card" style="background: rgba(0, 0, 0, 0.3); height: 250px;">
              <div class="card-body" style="color: white;">
                <h5 class="title"><?= $karier['nama_karier'] ?></h5>             
                <i><?= $karier['keterangan_karier'] ?></i>
            </div>
            </div>
            </div>
        <?php } ?>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2">
              <img class="mb-10" src="assets/img/cv.png">
            </div>
        <div class="col-lg-6">
            <div class="card" style="background: rgba(0, 0, 0, 0.2); width: 920px;">
              <div class="card-body" style="color: black;">
            <p class="tittle-send">Send Us Your CV</p>
            <p class="desc-send">If you wish to send us your CV, please email it to:</p>
            <p class="email-send">hrdenamel@gmail.com</p>
        </div>
    </div>
</div>
    </div>      
    </section>