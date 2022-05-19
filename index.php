<!DOCTYPE php>
<php lang="es">
  <head>
    <?php include_once('./includes/header.php') ?>
    <title>Inicio de sesión</title>
  </head>
  <?php
    session_start();
    include 'classDAO/usuariosDAO.php';
    $usuDAO = new usuariosDAO();
    if ( !empty($_POST['email']) && !empty($_POST['pass'])  ) {
      if ( $_POST['email'] == "adminaly@admin.com.co") {
        $_SESSION['type_user'] = 'admin';
        $_SESSION['id'] = 999;
        $_SESSION['nom'] = 'Administrador';
        header('Location:dashboardAdmin.php');
      } else {
        $datos = [];
        $datos = $usuDAO->obtenerUsuCorreo($_POST['email']);
        foreach ($datos as $dato) {
          $nombre = $dato['nombre'] . " " . $dato['apellido'];
          $_SESSION['id'] = $dato['id'];
          $_SESSION['nom'] = $nombre;
          $_SESSION['type_user'] = 'user';
        }
        header('Location:dashboardTrabajador.php');
      }
    }
    else {
      if( $_POST ) {
        echo $usuDAO->dataError();
      }
    }
  ?>
  <body class="main-page">
    <div class="container container-login">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-4">
          <div class="card-login">
            <img src="./img/logo_aly_1.png" alt="Software ALY" class="logo-aly">
            <h1 class="text-center title">Iniciar Sesión</h1>
            <form action="./index.php" method="POST">
              <div class="row my-3">
                <div class="col-12">
                  <input require type="email" name="email" placeholder="Email del usuario" class="form-control" id="inputEmail3">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <input require type="password" name="pass" placeholder="Contraseña" class="form-control" id="inputPassword3">
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-12 text-start">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="inputSaveData">
                    <label class="form-check-label" for="inputSaveData">
                      Recordar Sesión
                    </label>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Ingresar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</php>