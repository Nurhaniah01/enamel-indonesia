<?php

$id = $_GET['idhapus'];

$foto = $con->query("SELECT foto_lokasi FROM tbl_ket_lokasi WHERE id_lokasi='$id'")->fetch_assoc();
$foto = $foto['foto_lokasi'];
unlink("asset/images/lokasi/".$foto);

$hapus = $con->query("DELETE FROM tbl_ket_lokasi WHERE id_lokasi='$id'");

if ($hapus == True){
  echo "<script>success_message_delete('index.php?page=pages/lokasi/view_lokasi');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/lokasi/view_lokasi');
  </script>";
}


?>