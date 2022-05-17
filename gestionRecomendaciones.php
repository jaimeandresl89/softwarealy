<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <script src="js/sweetalert2.all.min.js"></script>
  <title>--Recomendaciones--</title>
  <style>
    #car {
      padding-bottom: 80px;
    }
  </style>
</head>
<?php
session_start();
include './classDAO/recomendacionesDAO.php';
$objrec = new recomendacionesClass();
$recdao = new recomendacionesDAO();
if (!empty($_POST['recomendacion'])) {

  $objrec->setRecomendacion($_POST['recomendacion']);
  $objrec->setEnlace($_POST['enlace']);
  $objrec->setId_parte($_POST['parte']);
  $recdao->create($objrec);
}
?>

<body>
  <?php include_once 'menu.php'; ?>

  <div class="container" id="car">
    <h1 class="text-center">Gestión Recomendaciones</h1><br><br>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Ingresar recomendación</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Modificar recomendaciones</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form class="row g-3" method="post" action="">
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Recomendación</label>
            <textarea name="recomendacion" rows="5" id="inputEmail4" class="form-control"></textarea>
          </div>
          <div class="col-md-5">
            <label for="inputPassword4" class="form-label">Enlace video</label>
            <input type="text" class="form-control" name="enlace" id="inputPassword4" placeholder="Enlace a video YouTube">
          </div>
          <div class="col-md-5">
            <label for="parte" class="form-label">Parte del cuerpo</label>
            <select name="parte" id="parte" class="form-control" required>
              <option value="">Seleccione uno...</option>';
              <?php
              $partes=$recdao->showListParteCuerpo();
              foreach ($partes as $parte) { ?>
                <option value="<?php echo $parte['id']; ?> "><?php echo $parte['nombre']; ?> </option>
              <?php
              } ?>
            </select>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary"  style="margin-top: 30px;">Registrar</button>
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <?php
        $recdao->show();
        ?>
      </div>
    </div>
  </div>

  <script src="js/scriptBusqueda.js"></script>
</body>

</html>