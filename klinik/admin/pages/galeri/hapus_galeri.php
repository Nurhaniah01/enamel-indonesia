<?php

$id = $_GET['idhapus'];

$foto = $con->query("SELECT foto FROM tbl_galeri WHERE id_galeri='$id'")->fetch_assoc();
$foto = $foto['foto'];
unlink("asset/images/galeri/".$foto);

$hapus = $con->query("DELETE FROM tbl_galeri WHERE id_galeri='$id'");

if ($hapus == True){
  echo "<script>success_message_delete('index.php?page=pages/galeri/view_galeri');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/galeri/view_galeri');
  </script>"; 
}


?>