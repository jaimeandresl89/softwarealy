<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once('./includes/header.php') ?>
  <title>Recomendaciones</title>
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
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-6">
            <h1 class="text-center mb-5">Información personal</h1>
            <div class="div-iframe">
              <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSed-xFGnBab9R-fgm7LDSa75Kfi7eU-CglddY7ywVlbC2vvRQ/viewform?embedded=true" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
            </div>
        </div>
      </div>
    </div>
</body>
</php>