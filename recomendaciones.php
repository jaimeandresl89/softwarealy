<?php
session_start();
include 'classDAO/dolenciasDAO.php';
$dolenciasObj = new dolenciasDAO();
$dolenciasUser = $dolenciasObj->showData($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once('./includes/header.php') ?>
  <title>Recomendaciones</title>
</head>

<body>

  <?php
  if ($_SESSION["type_user"]  == 'admin') {
    include_once './includes/menu-admin.php';
  } else {
    include_once './includes/menu-user.php';
  }
  ?>

  <div class="container container-recomendaciones py-aly">

    <div class="row d-flex justify-content-center">
      <div class="col-12 col-lg-7">
        <h1 class="text-center mb-2">Recomendaciones</h1>
        <p class="text-caption text-center mb-3">
          A continuación se presentan las recomendaciones de acuerdo a los items seleccionados por usted.
        </p>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="d-flex align-items-start">
          <div class="nav flex-column nav-pills me-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php foreach ( $dolenciasUser as $key => $item ): ?>
              <button class="nav-link <?= $key == 0 ? 'active' : '' ?>" 
                      id="v-pills-body-<?=$key?>" data-bs-toggle="pill" data-bs-target="#v-pills-<?=$key?>" type="button" role="tab" aria-controls="v-pills-<?=$key?>" aria-selected="<?= $key == 0 ? 'true' : 'false' ?>">
                <?=$item['parte']?>
              </button>
            <?php endforeach; ?>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <?php foreach ( $dolenciasUser as $key => $item ): ?>
              <div class="tab-pane fade <?= $key == 0 ? 'show active' : '' ?> " 
                    id="v-pills-<?=$key?>" role="tabpanel" aria-labelledby="v-pills-<?=$key?>-tab">
                <?php 
                  $recomendacion = $dolenciasObj->showRecomendacionParte($item['id_parte']);
                  if( count( $recomendacion) > 0 ) :
                  foreach ( $recomendacion as $key => $userReco ) : ?>
                    <div class="content-recomendation" data-id-reco="<?=$userReco['id_recomendacion']?>">
                      <?php if( strlen( $userReco['enlace'] ) > 0  ) : ?>
                        <div class="container-iframe">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="responsive-iframe embed-responsive-item" src="<?=$userReco['enlace']?>"></iframe>
                          </div>
                        </div>
                      <?php endif; ?>
                      <p> <?= $userReco['recomendacion']?> </p>
                    </div>
                    <hr class="separator">
                  <?php endforeach;  else : ?>
                  <div class="content-recomendation">
                    <h2>No hay recomendaciones registradas</h2>
                  </div>
                  <?php endif; ?>
              </div>
            <?php endforeach; ?>
            
              
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</php>