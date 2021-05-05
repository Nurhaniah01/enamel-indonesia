<section id="resume" class="resume section-bg" style="background-color: floralwhite;">
<div class="container">
        <br>
        <div class="section-title">
            <h2 align=center>News Enamel Indonesia | Dental Clinic</h2>
        </div>
<div class="row">
    <?php 
        $data = $con->query("SELECT * FROM tbl_news");
        while($news = $data->fetch_assoc()){
    ?>
    <div class="col-md-6 mb-3" >
        <div class="card" style="box-shadow: -3px 1px 52px -16px rgba(41,97,44,1);">
            <div class="card-body" style="min-height:320px;">
                <div class="row">
                    <div class="col-md-5">
                        <img src="klinik/admin/assets/images/news/<?= $news['foto_news']?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <p class="title" align=justify><?= $news['nama_news'] ?></p>
                        <hr>
                        <p align=justify><i><?= $news['keterangan_news'] ?></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
   </div>
</div>
</section>