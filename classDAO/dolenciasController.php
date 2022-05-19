<?php
  include 'dolenciasDAO.php';
  session_start();
  if ( !empty($_POST['dataType']) && $_POST['dataControl'] == 'bodyPart' ) {
    $registerBodyPart = new dolenciasDAO();
    $dataRegister = $_POST['dataForm'];
    $dataResponse = array();
    foreach ( $dataRegister as $key => $value ) {
      $result = $registerBodyPart->create($value, intval($_SESSION['id']));
      array_push($dataResponse, $result );
    }
    echo json_encode($dataResponse);  
  }

?>