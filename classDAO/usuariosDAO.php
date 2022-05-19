<?php 

include 'credenciales.php';
include 'usuariosClass.php';
include 'funciones.php';

class usuariosDAO{

private $conex;

function __construct() { 

 }

public function conectar() {
try { 
$this->conex = new mysqli(SERVIDOR, USUARIO, PASS, BD) or die('Error al conectar');
}
catch (Exception $exc) {
echo $exc->getTraceAsString();
}
}

public function desconectar() {
$this->conex->close();
}

public function create($usuariosOBJ)
{
    $objusuario = new usuariosClass();
    $objusuario = $usuariosOBJ;
    $sql= "INSERT INTO usuarios(nom, ape, edad, sexo, dir, cel, email, empresa, cargo, dep, ciudad, estado, rol)"
    . "VALUES ("
    . "'" . $objusuario->getNom() . "', "
    . "'" . $objusuario->getApe() . "', "
    . "'" . $objusuario->getEdad() . "', "
    . "'" . $objusuario->getSexo() . "', "
    . "'" . $objusuario->getDir() . "', "
    . "'" . $objusuario->getCel() . "', "
    . "'" . $objusuario->getEmail() . "', "
    . "'" . $objusuario->getEmpresa() . "', "
    . "'" . $objusuario->getCargo() . "', "
    . "'" . $objusuario->getDep() . "', "
    . "'" . $objusuario->getCiudad() . "', "
    . "'" . $objusuario->getEstado() . "', "
    . "'" . $objusuario->getRol() . "')";
    //echo $sql;
    $this->conectar();
        if ($this->conex->query($sql)) {
            mensajeCorrecto("Se registró correctamente el usuario");
        } else {
            mensajeError("No se pudo registrar el usuario");
        }
        $this->desconectar();

}

public function update($usuariosOBJ, $idusuarios)
{

}

public function show() {
    $sql = "SELECT * FROM usuarios";
        $this->conectar();
        if ($this->conex->query($sql)) {
            $result = $this->conex->query($sql);
            $tablaFactores = "
            <form>
                <input id='palabra1' class='form-control' type='text' onkeyup='buscar1()' placeholder='Buscar...'>
            </form>
            <div class='table-responsive'>
                <table class='table table-striped table-hover table-responsive table-bordered' id='datos1'>
                    <thead>
                        <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Nombres</th>
                        <th scope='col'>Apellidos</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Empresa</th>
                        <th scope='col'>Cargo</th>
                        <th scope='col'>Departamento</th>
                        <th scope='col'>Ciudad</th>
                        <th scope='col'>Estado</th>
                        <th scope='col'>Modificar/Detallar</th>
                        <th scope='col'>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                $tablaFactores .= '
                        <tr>
                            <td>' . $row['id_usu'] . '</td>
                            <td>' . $row['nom'] . '</td>
                            <td>' . $row['ape'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['empresa'] . '</td>
                            <td>' . $row['cargo'] . '</td>
                            <td>' . $row['dep'] . '</td>
                            <td>' . $row['ciudad'] . '</td>
                            <td>' . $row['estado'] . '</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modificar' . $row['id_usu'] . '">
                                        <i class="bi bi-pencil"></i>
                                </button>
                                <div class="modal fade" id="modificar' . $row['id_usu'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog text-start">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-trash-fill"></i> Modificar usuario</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form class="row g-3" method="post" action="">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Nombres</label>
                                                        <input type="text" class="form-control" name="nom" id="inputEmail4" placeholder="Nombres completos" value="' . $row['nom'] . '">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputPassword4" class="form-label">Apellidos</label>
                                                        <input type="text" class="form-control" name="ape" id="inputPassword4" placeholder="Apellidos completos" value="' . $row['ape'] . '">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputAddress" class="form-label">Dirección</label>
                                                        <input type="text" class="form-control" name="dir" id="inputAddress" placeholder="Dirección" value="' . $row['dir'] . '">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Edad</label>
                                                        <input type="number" class="form-control" name="edad" id="inputEmail4" placeholder="Edad" value="' . $row['edad'] . '">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="inputAddress2" class="form-label">Sexo</label>
                                                        <input type="text" class="form-control" id="inputCity" name="cargo" value="' . $row['sexo'] . '">
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="inputAddress" class="form-label">Celular</label>
                                                        <input type="text" class="form-control" name="cel" id="inputAddress" placeholder="Celular" value="' . $row['cel'] . '">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email" id="inputEmail4" value="' . $row['email'] . '">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="inputAddress2" class="form-label">Empresa</label>
                                                        <input type="text" class="form-control" id="inputCity" name="cargo" value="' . $row['empresa'] . '">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="inputCity" class="form-label">Cargo</label>
                                                        <input type="text" class="form-control" id="inputCity" name="cargo" value="' . $row['cargo'] . '">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputState" class="form-label">Departamento</label>
                                                        <select id="inputState" class="form-select" name="dep">
                                                            <option >Escoja una...</option>
                                                            <option selected value="Nariño">Nariño</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputZip" class="form-label">Ciudad</label>
                                                        <select id="inputState" class="form-select" name="ciudad">
                                                            <option>Escoja una....</option>
                                                            <option selected value="San Juan de Pasto">San Juan de Pasto</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputZip" class="form-label">Estado</label>
                                                        <input type="text" class="form-control" id="inputCity" name="estado" value="' . $row['estado'] . '">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputZip" class="form-label">Rol</label>
                                                        <input type="text" class="form-control" id="inputCity" name="rol" value="' . $row['rol'] . '">
                                                    </div>
                                           
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-sm btn-primary" >Modificar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar' . $row['id_usu'] . '">
                                        <i class="bi bi-trash"></i>
                                </button>
                                <div class="modal fade" id="eliminar' . $row['id_usu'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog text-start">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-trash-fill"></i> Eliminar actividad asignada</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post" name="eliminar">
                                                    <p>
                                                        <h6>¿Seguro que desea eliminar esta actividad?</h6><mark>Recuerde que este procedimiento no tiene regreso</mark>
                                                    </p>
                                                    <input value="2" name="opc" type="hidden">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-sm btn-danger" >Si, eliminar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </td>
                        </tr>';
            }
            $tablaFactores .= "
            <tr class='noencontrado1 hide'>
                <td colspan='5'></td>
            </tr>
            </tbody>"
                . "</table>
                    </div>";
            echo $tablaFactores;
        } else {
            mensajeError("Existe un error con la base de datos al momento de registrar");
        }

        $this->desconectar();
}

public function obtenerUsuCorreo($correo){
    $this->conectar();
        $sql = "SELECT * FROM usuarios WHERE email='".$correo."'";
        echo $sql;
        $datos = [];
        if ($this->conex->query($sql)) {
            $result = $this->conex->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $datos[] = [
                    'id' => $row['id_usu'],
                    'nombre' => $row['nom'],
                    'apellido' => $row['ape'],
                ];
            }
        }
        return $datos;
        $this->desconectar();
}

public function obtenerUsuId($id){
  $this->conectar();
      $sql = "SELECT * FROM usuarios WHERE id_usu='".$id."'";
      //echo $sql;

      if ($this->conex->query($sql)) {
          $result = $this->conex->query($sql);
          $row = mysqli_fetch_assoc($result);
          return $row;
      }

      $this->desconectar();
}

public function delete($idusuarios){

}

public function dataError() {
  mensajeError("Debe digitar usuario y contraseña");
}
}

