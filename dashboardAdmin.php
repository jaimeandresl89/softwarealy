<?php 
  session_start();
  if( $_SESSION["type_user"]  != 'admin' ) {
    header('Location:dashboardTrabajador.php');
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once('./includes/header.php') ?>
  <title>Dashboard Admin</title>
</head>

<body class="dashboard-admin">

  <?php include_once './includes/menu-admin.php'; ?>

  <div class="container container-cards">
    <div class="row d-flex justify-content-center ">
      <div class="col-12 col-md-6 col-lg-4 col-card h-100">
        <a href="gestionUsuarios.php" class="btn">
          <img src="img/people-fill.svg" class="card-img-top" >
          Gestión de Usuarios
        </a>
      </div>
      <div class="col-12 col-md-6 col-lg-4 col-card h-100">
        <a href="info.php" class="btn">
          <img src="img/journal-check.svg" class="card-img-top">
          Administrar Encuesta
        </a>
      </div>
      <div class="col-12 col-md-6 col-lg-4 col-card h-100">
        <a href="gestionRecomendaciones.php" class="btn">
          <img src="img/list-check.svg" class="card-img-top">
          Recomendaciones
        </a>
      </div>
    </div>
  </div>
</body>

</html>