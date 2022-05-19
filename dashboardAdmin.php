<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>::Administrador::</title>
    <style>
       body{
           background-color:aliceblue
        }
        
        #cards{
            margin-top: 140px;
            margin-bottom: auto;
            align-content: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    
  <?php include_once 'menu.php'; ?>
  <br><h2 class="text-center">Área de trabajo de Administrador</h2>
    <div class="container" id="cards">
        <div class="row">
            <div class="col-sm d-flex justify-content-center">
            <a href="gestionUsuarios.php" class="btn btn-primary"><img src="img/people-fill.svg" class="card-img-top" alt="...">Gestión de Usuarios</a>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <a href="encuesta.php" class="btn btn-primary"><img src="img/journal-check.svg" class="card-img-top" alt="...">Administrar Encuesta</a>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <a href="gestionRecomendaciones.php" class="btn btn-primary"><img src="img/list-check.svg" class="card-img-top" alt="...">Recomendaciones</a>
            </div>
        </div>
    </div>
    
    
    
    
    
</body>
</html>