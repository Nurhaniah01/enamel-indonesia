<?php

$id = $_GET['idhapus'];

$hapus = $con->query("DELETE FROM tbl_admin WHERE id_admin='$id'");
if($hapus == True){
    echo "<script>success_message_delete('index.php?page=pages/admin/view_admin');
</script>";
}else{
    echo "<script>error_message_delete('index.php?page=pages/admin/view_admin');
</script>";
}

?>