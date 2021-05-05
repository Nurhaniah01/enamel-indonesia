<?php

$id = $_GET['idhapus'];

$foto = $con->query("SELECT foto_dokter FROM tbl_dokter WHERE id_dokter='$id'")->fetch_assoc();
$foto = $foto['foto_dokter'];
unlink("asset/images/dokter/".$foto);

$hapus = $con->query("DELETE FROM tbl_dokter WHERE id_dokter='$id'");

if ($hapus == True){
  echo "<script>success_message_delete('index.php?page=pages/dokter/view_dokter');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/dokter/view_dokter');
  </script>";  
}


?>