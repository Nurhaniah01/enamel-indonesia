<?php

$id = $_GET['idhapus'];

$hapus = $con->query("DELETE FROM tbl_testimoni WHERE id_testimoni='$id'");
if($hapus == True){
    echo "<script>success_message_delete('index.php?page=pages/testimoni/view_testimoni');
  </script>";
  }else{
      echo "<script>error_message_delete('index.php?page=pages/testimoni/view_testimoni');
  </script>";
}

?>