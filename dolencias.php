<?php
session_start();
//include './classDAO/usuariosDAO.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once('./includes/header.php') ?>
  <title>Dolencias</title>
</head>
<body>
  <?php 
    if ($_SESSION["type_user"]  == 'admin') {
      include_once './includes/menu-admin.php';
    }
    else {
      include_once './includes/menu-user.php';
    }
  ?>
  <div class="container py-aly">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">Dolencias</h1>
      </div>
    </div>
  </div>

</body>
</php>