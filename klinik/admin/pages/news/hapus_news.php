<?php

$id = $_GET['idhapus'];

$foto = $con->query("SELECT foto_news FROM tbl_news WHERE id_news='$id'")->fetch_assoc();
$foto = $foto['foto_news'];
unlink("asset/images/news/".$foto);

$hapus = $con->query("DELETE FROM tbl_news WHERE id_news='$id'");

if ($hapus == True){
  echo "<script>success_message_delete('index.php?page=pages/news/view_news');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/news/view_news');
  </script>";
}


?>