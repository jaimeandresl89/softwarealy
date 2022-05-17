<?php

function mensajeCorrecto($msj){
   echo "<script>
   Swal.fire(
    'Correcto!',
    '".$msj."',
    'success'
  )
   </script>";
}

function mensajeError($msj){
   echo "<script>
   Swal.fire(
    'Incorrecto!',
    '".$msj."',
    'error'
  )
   </script>";
}