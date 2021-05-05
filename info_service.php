<main id="main">
<div class="container">

            <br>
            <h2 align=center>Our Services</h2>
            <hr>
            
</div>
<?php
$id = $_GET['id'];
$pelayanan = $con->query("SELECT * FROM tbl_pelayanan WHERE id_pelayanan='$id'")->fetch_assoc();
?>
<br>
<div class="col-md-12" style="padding-bottom: 20px;">
        <div class="container">
        <div class="card" style="box-shadow: -3px 1px 52px -16px rgba(41,97,44,1); background-color:floralwhite;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="klinik/admin/assets/images/pelayanan/<?= $pelayanan['foto_pelayanan']?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h3 class="title"><?= $pelayanan['nama_pelayanan'] ?></h3>
                                <p><?= $pelayanan['keterangan_pelayanan'] ?></p>
                                <h5>Price List : Rp.<?= number_format($pelayanan['harga_pelayanan']) ?></h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div align=center>
        <a href="?page=our_service" class="btn btn-outline-info">Close</a>
        </div>
   </div>
</div>

</main>