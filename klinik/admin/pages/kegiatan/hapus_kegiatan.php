<?php

$id = $_GET['idhapus'];

$foto = $con->query("SELECT foto_kegiatan FROM tbl_kegiatan WHERE id_kegiatan='$id'")->fetch_assoc();
$foto = $foto['foto_kegiatan'];
unlink("asset/images/kegiatan/".$foto);

$hapus = $con->query("DELETE FROM tbl_kegiatan WHERE id_kegiatan='$id'");

if ($hapus == True){
  echo "<script>success_message_delete('index.php?page=pages/kegiatan/view_kegiatan');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/kegiatan/view_kegiatan');
  </script>";
}


?>