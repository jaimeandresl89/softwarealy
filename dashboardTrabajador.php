<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>::Trabajador::</title>
    <style>
        body{
           background-color:aliceblue
        }
        
        #cards{
            margin-top: 150px;
            margin-bottom: auto;
            align-content: center;
            vertical-align: middle;
        } 
    </style>
</head>
<body>
<?php include_once 'menu2.php'; ?>
<br><h2 class="text-center">Área de trabajo de <?php echo $_SESSION['nom']; ?></h2>
<div class="container" id="cards">
        
        <div class="row">
            <div class="col-sm d-flex justify-content-center">
            <a href="actualizardatos.php" class="btn btn-primary"><img src="img/people-fill.svg" class="card-img-top" alt="...">Actualizar datos</a>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <a href="info.php" class="btn btn-primary"><img src="img/journal-check.svg" class="card-img-top" alt="...">Responder Encuesta</a>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <a href="avatar.php" class="btn btn-primary"><img src="img/list-check.svg" class="card-img-top" alt="...">Reporte Dolencias</a>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <a href="gestionRecomendaciones.php" class="btn btn-primary"><img src="img/telephone-forward-fill.svg" class="card-img-top" alt="...">Solicitar Asesoría</a>
            </div>
        </div>
    </div>
</body>
</html>