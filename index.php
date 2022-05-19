<?php
session_start();
include 'classDAO/usuariosDAO.php';
$usuDAO = new usuariosDAO();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Inicio de sesión</title>
  <style>
    body {
      background-color: aliceblue;
    }

    #central {
      padding-top: 100px;
    }
  </style>

<body>
  <?php
  if (!empty($_POST['email'])) {
    if ($_POST['email'] == "adminaly@admin.com.co") {
      header('Location:dashboardAdmin.php');
    } else {
      $datos = [];
      $datos = $usuDAO->obtenerUsuCorreo($_POST['email']);
      foreach ($datos as $dato) {
        $_SESSION['id'] = $dato['id'];
        $nombre = $dato['nombre'] . " " . $dato['apellido'];
        $_SESSION['nom'] = $nombre;
        header('Location:dashboardTrabajador.php');
      }
    }
  }
  ?>
  <div class="row" id="central">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 row d-flex justify-content-center shadow-lg p-3 mb-5 bg-body rounded">
      <div class="d-flex justify-content-center">
        <img src="img/PNG/MARY_ALY_Mesa de trabajo 1.png" width="40%">
      </div>
      <h2 class="text-center" id="titulo">Iniciar Sesión</h2><br>
      <br><br>
      <form action="" method="post">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="pass" class="form-control" id="inputPassword3" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Recordar sesión
              </label>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="submit" href="dashboard.html">Ingresar</a>
        </div>
        
      </form>
    </div>
    <div class="col-sm-4"></div>
  </div>
</body>

</html>