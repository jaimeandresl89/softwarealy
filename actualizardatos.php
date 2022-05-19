

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
    <title>::Actualizar Datos::</title>
    <style>
        #car{
            padding-bottom: 80px;
        }
    </style>
</head>
<?php 
  session_start();
  include './classDAO/usuariosDAO.php';
  $objUsu = new usuariosClass();
  $usudao= new usuariosDAO();
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
  $datos=$usudao->obtenerUsuId($_SESSION['id']);

?>
<body>
<?php include_once 'menu2.php'; ?>
    
    <div class="container" id="car">
        <h1 class="text-center">Actualizar datos</h1><br><br>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Ingresar usuarios</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form class="row g-3" method="post" action="">
                  <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nom" id="inputEmail4" placeholder="Nombres completos" value="<?php echo $datos['nom']; ?>">
                  </div>
                  <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="ape" id="inputPassword4" placeholder="Apellidos completos" value="<?php echo $datos['ape']; ?>">
                  </div>
                  <div class="col-md-2">
                    <label for="inputEmail4" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="edad" id="inputEmail4" placeholder="Edad" value="<?php echo $datos['edad']; ?>">
                  </div>
                  <div class="col-2">
                    <label for="inputAddress2" class="form-label">Sexo</label>
                    <input type="number" class="form-control" name="edad" id="inputEmail4" placeholder="Edad" value="<?php echo $datos['sexo']; ?>">
                  </div>
                  <div class="col-4">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="dir" id="inputAddress" placeholder="Dirección" value="<?php echo $datos['dir']; ?>">
                  </div>
                  <div class="col-4">
                    <label for="inputAddress" class="form-label">Celular</label>
                    <input type="text" class="form-control" name="cel" id="inputAddress" placeholder="Celular" value="<?php echo $datos['cel']; ?>">
                  </div>
                  <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="<?php echo $datos['email']; ?>">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress2" class="form-label">Empresa</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="<?php echo $datos['empresa']; ?>">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Cargo</label>
                    <input type="text" class="form-control" id="inputCity" name="cargo" value="<?php echo $datos['cargo']; ?>">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Departamento</label>
                    <select id="inputState" class="form-select" name="dep">
                      <option>Escoja una...</option>
                      <option selected value="Nariño">Nariño</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="inputZip" class="form-label">Ciudad</label>
                     <select id="inputState" class="form-select" name="ciudad">
                      <option>Escoja una....</option>
                      <option selected value="San Juan de Pasto">San Juan de Pasto</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Estado</label>
                     <select id="inputState" class="form-select" name="estado">
                      <option value="">Escoja una....</option>
                      <option value="Activo" selected>Activo</option>
                      <option value="Inactivo">Inactivo</option>
                    </select>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                  </div>
                </form>
            </div>
            
        </div>    
    </div>
    
    <script src="js/scriptBusqueda.js"></script>
</body>
</html>