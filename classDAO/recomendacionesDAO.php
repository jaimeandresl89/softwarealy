<?php 

include 'credenciales.php';
include 'recomendacionesClass.php';
include 'funciones.php';
class recomendacionesDAO{

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

public function create($recomendacionesOBJ)
{
    $recomendacionOBJ = new recomendacionesClass();
    $recomendacionOBJ = $recomendacionesOBJ;
    $sql= "INSERT INTO recomendaciones(recomendacion, enlace, id_parte)"
    . "VALUES ("
    . "'" . htmlspecialchars($recomendacionOBJ->getRecomendacion(), ENT_QUOTES, 'UTF-8') . "', "
    . "'" . htmlspecialchars($recomendacionOBJ->getEnlace(), ENT_QUOTES, 'UTF-8') . "', "
    . "'" . htmlspecialchars($recomendacionOBJ->getId_parte(), ENT_QUOTES, 'UTF-8') . "')";
    //echo $sql;
    $this->conectar();
        if ($this->conex->query($sql)) {
            mensajeCorrecto("Se registró correctamente la recomendación");
        } else {
            mensajeError("No se pudo registrar la recomendación");
        }
        $this->desconectar();
}

public function update($recomendacionesOBJ, $idrecomendaciones)
{

}

public function show() {
    $sql = "SELECT recomendaciones.id_recomendacion, recomendaciones.recomendacion, recomendaciones.enlace, recomendaciones.id_parte, partescuerpo.parte 
    FROM recomendaciones, partescuerpo WHERE recomendaciones.id_parte=partescuerpo.id_parte";
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
                        <th scope='col' class='text-center'>Id.</th>
                        <th scope='col' class='text-center'>Recomendación</th>
                        <th scope='col' class='text-center'>Enlace web</th>
                        <th scope='col' class='text-center'>Parte del cuerpo</th>
                        <th scope='col' class='text-center'>Modificar/Detallar</th>
                        <th scope='col' class='text-center'>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                $tablaFactores .= '
                        <tr>
                            <td>' . $row['id_recomendacion'] . '</td>
                            <td>' . $row['recomendacion'] . '</td>
                            <td><a href="' . $row['enlace'] . '" target="_blank">' . $row['enlace'] . '</td>
                            <td>' . $row['parte'] . '</td>
                            
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modificar' . $row['id_recomendacion'] . '">
                                        <i class="bi bi-pencil"></i>
                                </button>
                                <div class="modal fade" id="modificar' . $row['id_recomendacion'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog text-start">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-trash-fill"></i> Modificar usuario</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form class="row g-3" method="post" action="">
                                                    
                                           
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
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar' . $row['id_recomendacion'] . '">
                                        <i class="bi bi-trash"></i>
                                </button>
                                <div class="modal fade" id="eliminar' . $row['id_recomendacion'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <td colspan='6'></td>
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

public function showListParteCuerpo(){
    $this->conectar();
        $sql = "SELECT * FROM partescuerpo";
        $datos = [];
        if ($this->conex->query($sql)) {
            $result = $this->conex->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $datos[] = [
                    'id' => $row['id_parte'],
                    'nombre' => $row['parte'],
                ];
            }
        }
        return $datos;
        $this->desconectar();
}

public function showRecomendacionesUsuarios() {
    $sql= "SELECT usuarioparte.id_usupart, usuarioparte.id_usu, usuarios.nom, usuarios.ape, usuarios.edad, usuarios.email, usuarioparte.id_parte, partescuerpo.parte 
    FROM usuarioparte, usuarios, partescuerpo 
    WHERE usuarioparte.id_usu=usuarios.id_usu 
    AND usuarioparte.id_parte=partescuerpo.id_parte";
    //$sql = "SELECT recomendaciones.id_recomendacion, recomendaciones.recomendacion, recomendaciones.enlace, recomendaciones.id_parte, partescuerpo.parte 
    //FROM recomendaciones, partescuerpo WHERE recomendaciones.id_parte=partescuerpo.id_parte";
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
                        <th scope='col' class='text-center'>Id.</th>
                        <th scope='col' class='text-center'>Nombre trabajador</th>
                        <th scope='col' class='text-center'>Datos trabajador</th>
                        <th scope='col' class='text-center'>Parte del cuerpo reportada</th>
                        <th scope='col' class='text-center'>Modificar/Detallar</th>
                        <th scope='col' class='text-center'>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                $tablaFactores .= '
                        <tr>
                            <td>' . $row['id_usupart'] . '</td>
                            <td>' . $row['ape'] ." ".$row['nom']. '</td>
                            <td>
                                <strong>Edad: </strong>'.$row['edad'].'<br>
                                <strong>Email: </strong><a href="mailto:'.$row['email'].'" target="blank">'.$row['email'].'</a><br>
                            </td>
                            <td class="text-center">' . $row['parte'] . '</td>
                            
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modificar' . $row['id_usupart'] . '">
                                        <i class="bi bi-pencil"></i>
                                </button>
                                <div class="modal fade" id="modificar' . $row['id_usupart'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog text-start">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-trash-fill"></i> Modificar usuario</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form class="row g-3" method="post" action="">
                                                    
                                           
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
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar' . $row['id_usupart'] . '">
                                        <i class="bi bi-trash"></i>
                                </button>
                                <div class="modal fade" id="eliminar' . $row['id_usupart'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <td colspan='6'></td>
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

}

