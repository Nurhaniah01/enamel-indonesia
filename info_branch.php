<?php
$id = $_GET['id'];
$data = $con->query("SELECT * FROM tbl_ket_lokasi WHERE id_lokasi='$id'")->fetch_assoc();
?>
<div class="container mt-5 mb-5">
<?php echo $data['maps']; ?>
</div>