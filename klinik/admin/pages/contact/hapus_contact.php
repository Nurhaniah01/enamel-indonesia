<?php

$id = $_GET['idhapus'];

$hapus = $con->query("DELETE FROM tbl_contact WHERE id_contact='$id'");
if($hapus == True){
    echo "<script>success_message_delete('index.php?page=pages/contact/view_contact');
</script>";
}else{
    echo "<script>error_message_delete('index.php?page=pages/contact/view_contact');
</script>";  
}

?>