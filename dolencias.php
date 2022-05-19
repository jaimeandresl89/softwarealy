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
  } else {
    include_once './includes/menu-user.php';
  }
  ?>
  <div class="container py-aly container-dolencias">

    <div class="row d-flex justify-content-center">
      <div class="col-12 col-lg-7">
        <h1 class="text-center title-section">Dolencias</h1>
        <p class="text-caption">
          Por favor seleccione y registre las dolencias con las cuales usted se siente identificado.
        </p>
      </div>
    </div>

    <div class="row d-flex justify-content-center ">
      <div class="col-12 col-lg-4 col-selections">
        <div class="content">
          <p class="text-caption"> <b>Seleccione solo las opciones necesarias</b></p>
          <div class="form-body-part px-2">
            <form autocomplete="off" method="post" id="formBodyPart">
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-cabeza" name="body-part-cabeza" data-id-part="1" data-id-svg="cabezaEntera">
                <label class="form-check-label" for="body-part-cabeza">Cabeza</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-ojos" name="body-part-ojos" data-id-part="2" data-id-svg="ojos">
                <label class="form-check-label" for="body-part-ojos">Ojos</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-cuello" name="body-part-cuello" data-id-part="3" data-id-svg="cuello">
                <label class="form-check-label" for="body-part-cuello">Nuca/cuello</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-hombro-der" name="body-part-hombro-der" data-id-part="4" data-id-svg="hombroDer">
                <label class="form-check-label" for="body-part-hombro-der">Hombro derecho</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-hombro-izq" name="body-part-hombro-izq" data-id-part="5" data-id-svg="hombroIzq">
                <label class="form-check-label" for="body-part-hombro-izq">Hombro izquierdo</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-brazo-der" name="body-part-brazo-der" data-id-part="6" data-id-svg="brazoDer">
                <label class="form-check-label" for="body-part-brazo-der">Brazo derecho</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-brazo-izq" name="body-part-brazo-izq" data-id-part="7" data-id-svg="brazoIzq">
                <label class="form-check-label" for="body-part-brazo-izq">Brazo izquierdo</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-codo-der" name="body-part-codo-der" data-id-part="8" data-id-svg="codoDer">
                <label class="form-check-label" for="body-part-codo-der">Codo derecho</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-codo-izq" name="body-part-codo-izq" data-id-part="9" data-id-svg="codoIzq">
                <label class="form-check-label" for="body-part-codo-izq">Codo izquierdo</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-antebrazo-der" name="body-part-antebrazo-der"  data-id-part="10" data-id-svg="antebrazoDer">
                <label class="form-check-label" for="body-part-antebrazo-der">Antebrazo derecho</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-antebrazo-izq" name="body-part-antebrazo-izq" data-id-part="11" data-id-svg="antebrazoIzq">
                <label class="form-check-label" for="body-part-antebrazo-izq">Antebrazo izquierdo</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-mano-der" name="body-part-mano-der" data-id-part="12" data-id-svg="manoDer">
                <label class="form-check-label" for="body-part-mano-der">Manos/muñeca derecha</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-mano-izq" name="body-part-mano-izq" data-id-part="13" data-id-svg="manoIzq">
                <label class="form-check-label" for="body-part-mano-izq">Manos/muñeca izquierda</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-cervical" name="body-part-cervical" data-id-part="14" data-id-svg="cervical">
                <label class="form-check-label" for="body-part-cervical">Espalda alta (Cervical)</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-dorsal" name="body-part-dorsal" data-id-part="15" data-id-svg="dorsal">
                <label class="form-check-label" for="body-part-dorsal">Espalda media (Dorsal)</label>
              </div>

              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="body-part-lumbar" name="body-part-lumbar" data-id-part="16" data-id-svg="lumbar">
                <label class="form-check-label" for="body-part-lumbar">Espalda baja (Lumbar)</label>
              </div>

              <button type="submit" class="btn btn-success px-5 mt-4">REGISTRAR</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-body-front">
        <div class="content content-body content-body-front">
          <?php include_once './includes/body-front.php'; ?>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-body-back">
        <div class="content content-body content-body-back ">
          <?php include_once './includes/body-back.php'; ?>
        </div>
      </div>
    </div>
  </div>

</body>
</php>