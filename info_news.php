<div class="container">
        <br>
        <div class="section-title">
            <h2 align=center>News Enamel Indonesia | Dental Clinic</h2>
        </div>
<div class="row">
    <?php 
        $id =$_GET['id'];
        $news = $con->query("SELECT * FROM tbl_news WHERE id_news='$id'")->fetch_assoc();
    ?>
    <div class="col-md-12 mb-5">
        <div class="card mx-auto" style="box-shadow: -3px 1px 52px -16px rgba(41,97,44,1); width: 850px; background-color:floralwhite;">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <img src="klinik/admin/assets/images/news/<?= $news['foto_news']?>" alt="" class="img-fluid" style="height: 250px;">
                    </div>
                    <div class="col-md-4">
                        <p class="title" align=justify><?= $news['nama_news'] ?></p>
                        <hr>
                        <p align=justify><i><?= $news['keterangan_news'] ?></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-5">
        <a href="?page=home" class="btn btn-outline-info">Close</a>
    </div>
   </div>
</div>
