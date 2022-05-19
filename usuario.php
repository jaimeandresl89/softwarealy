<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once('./includes/header.php') ?>
  <title>Datos personales</title>
</head>

<body>
  <?php
  if ($_SESSION["type_user"]  == 'admin') {
    include_once './includes/menu-admin.php';
  } else {
    include_once './includes/menu-user.php';
  }
  ?>
  <div class="container py-aly container-gestion-usuarios" id="cuerpo">
    <h1 class="text-center">Datos Personales</h1><br><br><br>
    <div class="d-flex align-items-start">
      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="border-right: 1px; border-color: black">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dat. Personales</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Ocupación</button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Comorbilidades</button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Estilo de vida</button>
      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <form class="row bg-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombres</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Apellidos</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Sexo</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="inputZip">
            </div>
            <div class="col-8">
              <label for="inputAddress" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Calle 12 #13 - 24">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Ciudad</label>
              <select id="inputState" class="form-select">
                <option>Seleccione una...</option>
                <option selected>San Juan de Pasto</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">Teléfono/Celular</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="inputCity">
            </div>
            <div class="col-12 d-flex justify-content-end" id="btnregistrar">
              <button class="btn btn-primary mt-3">Registrar</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <form class="row bg-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombre de la empresa</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Tiempo de trabajo</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Horas de trabajo por semana</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Fecha de inicio</label>
              <input type="date" class="form-control" id="inputZip">
            </div>
            <div class="col-8">
              <label for="inputAddress" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Calle 12 #13 - 24">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Ciudad</label>
              <select id="inputState" class="form-select">
                <option>Seleccione una...</option>
                <option selected>San Juan de Pasto</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">Teléfono/Celular</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="inputCity">
            </div>
            <div class="col-12 d-flex justify-content-end " id="btnregistrar">
              <button class="btn btn-primary mt-3">Registrar</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
      </div>
    </div>
  </div>



</body>
</php>