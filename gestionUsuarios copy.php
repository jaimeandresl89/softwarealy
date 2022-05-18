<?php
session_start();
if ($_SESSION["type_user"]  != 'admin') {
  header('Location:dashboardTrabajador.php');
}
include './classDAO/usuariosDAO.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once('./includes/header.php') ?>
  <title>Gestion Usuarios</title>
</head>

<?php
$objUsu = new usuariosClass();
$usudao = new usuariosDAO();
if (!empty($_POST['nom'])) {

  $objUsu->setNom($_POST['nom']);
  $objUsu->setApe($_POST['ape']);
  $objUsu->setEdad($_POST['edad']);
  $objUsu->setSexo($_POST['sexo']);
  $objUsu->setDir($_POST['dir']);
  $objUsu->setCel($_POST['cel']);
  $objUsu->setEmail($_POST['email']);
  $objUsu->setEmpresa($_POST['empresa']);
  $objUsu->setCargo($_POST['cargo']);
  $objUsu->setDep($_POST['dep']);
  $objUsu->setCiudad($_POST['ciudad']);
  $objUsu->setEstado($_POST['estado']);
  $objUsu->setRol($_POST['rol']);
  $usudao->create($objUsu);
}
?>

<body>
  <?php include_once './includes/menu-admin.php'; ?>

  <div class="container py-aly container-gestion-usuarios" id="car">
    <h1 class="text-center">Gestión Usuarios</h1><br><br>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Ingresar usuarios</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Modificar Usuarios</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form class="row g-3" method="post" action="">
          <div class="col-md-4">
            <label for="inputEmail4" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nom" id="inputEmail4" placeholder="Nombres completos">
          </div>
          <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="ape" id="inputPassword4" placeholder="Apellidos completos">
          </div>
          <div class="col-md-2">
            <label for="inputEmail4" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" id="inputEmail4" placeholder="Edad">
          </div>
          <div class="col-2">
            <label for="inputAddress2" class="form-label">Sexo</label>
            <select class="form-control" name="sexo">
              <option value="">Elige una...</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>
          <div class="col-4">
            <label for="inputAddress" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="dir" id="inputAddress" placeholder="Dirección">
          </div>
          <div class="col-4">
            <label for="inputAddress" class="form-label">Celular</label>
            <input type="text" class="form-control" name="cel" id="inputAddress" placeholder="Celular">
          </div>
          <div class="col-md-4">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Nombres completos">
          </div>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">Empresa</label>
            <select name="empresa" class="form-control">
              <option value="">Elige una...</option>
              <option value="AYC Soluciones">AYC Soluciones</option>
              <option value="Katary Software">Katary Software</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="inputCity" name="cargo">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Departamento</label>
            <select id="inputState" class="form-select" name="dep">
              <option selected>Escoja una...</option>
              <option value="Nariño">Nariño</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputZip" class="form-label">Ciudad</label>
            <select id="inputState" class="form-select" name="ciudad">
              <option selected>Escoja una....</option>
              <option value="San Juan de Pasto">San Juan de Pasto</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Estado</label>
            <select id="inputState" class="form-select" name="estado">
              <option value="">Escoja una....</option>
              <option value="Activo">Activo</option>
              <option value="Inactivo">Inactivo</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Rol</label>
            <select id="inputState" class="form-select" name="rol">
              <option value="">Escoja una....</option>
              <option value="Administrador">Administrador</option>
              <option value="Trabajador">Trabajador</option>
            </select>
          </div>
          <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <?php
        $usudao->show();
        ?>
      </div>
    </div>
  </div>

  <script src="js/scriptBusqueda.js"></script>
</body>

</html>