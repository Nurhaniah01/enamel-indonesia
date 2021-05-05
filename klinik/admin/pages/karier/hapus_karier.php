<?php

$id = $_GET['idhapus'];

$hapus = $con->query("DELETE FROM tbl_karier WHERE id_karier='$id'");
if($hapus == True){
    echo "<script>success_message_delete('index.php?page=pages/karier/view_karier');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/karier/view_karier');
  </script>"; 
}

?>