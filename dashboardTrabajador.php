<?php
session_start();
//var_dump($_SESSION);
?>
<!DOCTYPE php>
<php lang="es">

  <head>
    <?php include_once('./includes/header.php') ?>
    <title>Inicio de sesión</title>
  </head>

  <body class="dashboard-trabajador ">
    <?php include_once './includes/menu-user.php'; ?>
    <div class="container container-cards py-aly">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 col-card my-3 h-100">
          <a href="actualizardatos.php" class="btn btn-primary">
            <img src="img/people-fill.svg" class="card-img-top">
            Actualizar datos
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-card my-3 h-100">
          <a href="info.php" class="btn btn-primary">
            <img src="img/journal-check.svg" class="card-img-top">
            Responder Encuesta
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-card my-3 h-100">
          <a href="dolencias.php" class="btn btn-primary">
            <img src="img/list-check.svg" class="card-img-top">
            Registrar Dolencias
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-card my-3 h-100">
          <a href="recomendaciones.php" class="btn btn-primary">
            <img src="img/list-check.svg" class="card-img-top">
            Reporte Recomendaciones
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-card my-3 h-100">
          <a href="https://wa.me/+573206636172?text=Necesito%20por%20favor%20una%20asesoria" target="blank" class="btn btn-primary">
            <img src="img/telephone-forward-fill.svg" class="card-img-top">
            Solicitar Asesoría
          </a>
        </div>
      </div>
    </div>
  </body>
</php>