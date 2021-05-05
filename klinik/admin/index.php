<?php
session_start();
include('koneksi.php');
if($_SESSION['id_admin'] == ''){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'components/head.php'?>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include('components/navbar.php') ?>

    <?php include('components/sidebar.php') ?>  

    <?php include('content.php')?>

    <?php include('components/footer.php') ?>
  </div>

  <?php include('components/script.php') ?>

</body>

</html>
