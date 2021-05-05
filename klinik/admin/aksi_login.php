<?php 
include "koneksi.php"; 

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek = $con->query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'")->fetch_assoc();
    if($cek == TRUE)
    {
        session_start();
        $_SESSION['id_admin'] = $cek['id_admin'];
        header('location:index.php');
    }else{
        header('location:login.php');
    }
}
?>