<? $local = $_SESSION["type_user"]  == 'admin' ? 'dashboardAdmin' : 'dashboardTrabajador'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=$local?>">
      <img src="./img/logo_aly_2.png" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="dashboardTrabajador.php">Inicio
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dolencias.php">Dolencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recomendaciones.php">Recomendaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.php">Encuesta</a>
        </li>
      </ul>
      <a class="nav-link" href="salir.php" class="navbar-toggler" style="color: #FFFFFF; text-decoration: none"><i class="bi bi-person-circle"></i> Cerrar sesión</a>

    </div>
  </div>
</nav>