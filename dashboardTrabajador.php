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

  <body class="dashboard-trabajador">
    <?php include_once './includes/menu-user.php'; ?>
    <div class="container" id="cards">
      <div class="row">
        <div class="col-sm d-flex justify-content-center">
          <a href="gestionUsuarios.php" class="btn btn-primary"><img src="img/people-fill.svg" class="card-img-top" alt="...">Actualizar datos</a>
        </div>
        <div class="col-sm d-flex justify-content-center">
          <a href="info.php" class="btn btn-primary"><img src="img/journal-check.svg" class="card-img-top" alt="...">Responder Encuesta</a>
        </div>
        <div class="col-sm d-flex justify-content-center">
          <a href="gestionRecomendaciones.php" class="btn btn-primary"><img src="img/list-check.svg" class="card-img-top" alt="...">Reporte Dolencias</a>
        </div>
        <div class="col-sm d-flex justify-content-center">
          <a href="gestionRecomendaciones.php" class="btn btn-primary"><img src="img/list-check.svg" class="card-img-top" alt="...">Report</a>
        </div>
        <div class="col-sm d-flex justify-content-center">
          <a href="gestionRecomendaciones.php" class="btn btn-primary"><img src="img/telephone-forward-fill.svg" class="card-img-top" alt="...">Solicitar Asesoría</a>
        </div>
      </div>
    </div>
  </body>
</php>