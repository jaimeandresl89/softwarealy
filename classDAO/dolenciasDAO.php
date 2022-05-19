<?php 
  include 'credenciales.php';
  include 'dolenciasClass.php';

  class dolenciasDAO {
    private $conex;
    function __construct() {  }
    
    public function conectar() {
      try { 
        $this->conex =  new mysqli(SERVIDOR, USUARIO, PASS, BD) 
                        or die('Error al conectar');
      }
      catch (Exception $exc) {
        echo $exc->getTraceAsString();
      }
    }
    
    public function desconectar() {
      $this->conex->close();
    }

    public function create( $data, $user ) {
      $sql= "INSERT INTO usuarioparte(id_usu, id_parte) VALUES ('".$user."','".intval($data['idPart'])."' ) ";
      $this->conectar();
      if ($this->conex->query($sql)) {
        return array('error' => FALSE, 'restext' => "Todos los datos se registraron satisfactoriamente." );
      } else {
        return array('error' => TRUE, 'restext' => "Hubo un problema al registrar sus datos" );
      }
      $this->desconectar();
    }

    public function showData ( $id_user ) {
      $this->conectar();
        $sql = "SELECT * FROM usuarioparte, partescuerpo WHERE  usuarioparte.id_parte = partescuerpo.id_parte AND usuarioparte.id_usu = '".$id_user."'";
        $datos = [];
        if ($this->conex->query($sql)) {
            $result = $this->conex->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $datos[] = $row;
            }
        }
        return $datos;
        $this->desconectar();
    }

    public function showRecomendacionParte ( $id_parte ) {
      $this->conectar();
        $sql = "SELECT * FROM recomendaciones, partescuerpo WHERE recomendaciones.id_parte = partescuerpo.id_parte AND recomendaciones.id_parte = '".$id_parte."'";
        $datos = [];
        if ($this->conex->query($sql)) {
            $result = $this->conex->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $datos[] = $row;
            }
        }
        return $datos;
        $this->desconectar();
    }
  }

?>