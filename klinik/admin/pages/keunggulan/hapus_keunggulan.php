<?php

$id = $_GET['idhapus'];

$hapus = $con->query("DELETE FROM tbl_keunggulan WHERE id_keunggulan='$id'");
if($hapus == True){
    echo "<script>success_message_delete('index.php?page=pages/keunggulan/view_keunggulan');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/keunggulan/view_keunggulan');
  </script>";
}

?>