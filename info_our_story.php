<section id="team" class="team">
<div class="container">
            <br>
            <br>
            <div class="section-title">
            <h2 align=center>Our Story</h2>
            
</div>
<?php 
$id = $_GET['id'];
$data = $con->query("SELECT * FROM tbl_kegiatan WHERE id_kegiatan='$id'");
while($kegiatan = $data->fetch_assoc()){
?>

    <div class="card" style="margin-bottom: 20px;">
        <div class="card-header" style="text-align:center; background-color: lavender;">
            <h5 class="title"><?= $kegiatan['nama_kegiatan'] ?></h5>
        </div>        
        
        <div class="card-body">
            <img style="text-align: center;" src="klinik/admin/assets/images/kegiatan/<?= $kegiatan['foto_kegiatan']?>" alt="" class="img-fluid" style="width: 530px; height: 400px;">            
            <p><?= $kegiatan['keterangan_kegiatan'] ?></p>
        </div>
    </div>
    <div align=center>
        <a href="?page=our_story" class="btn btn-outline-info">Close</a>
    </div>
    <br>
<?php } ?>
</section>