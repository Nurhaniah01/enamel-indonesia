<?php

$id = $_GET['idhapus'];

$foto = $con->query("SELECT foto_pelayanan FROM tbl_pelayanan WHERE id_pelayanan='$id'")->fetch_assoc();
$foto = $foto['foto_pelayanan'];
unlink("asset/images/pelayanan/".$foto);

$hapus = $con->query("DELETE FROM tbl_pelayanan WHERE id_pelayanan='$id'");

if ($hapus == True){
  echo "<script>success_message_delete('index.php?page=pages/pelayanan/view_pelayanan');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/pelayanan/view_pelayanan');
  </script>";
}


?>