<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once('./includes/header.php') ?>
  <title>Encuesta de morbilidad</title>
  <style>
       body{
           background-color:aliceblue
        }
        
        #cards{
            margin-top: 40px;
            margin-bottom: auto;
            align-content: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <?php 
      if ($_SESSION["type_user"]  == 'admin') {
        include_once './includes/menu-admin.php';
      }
      else {
        include_once './includes/menu-user.php';
      }
    ?>

    <div class="container py-aly">
      <div class="row d-flex justify-content-center">
        
            <h1 class="text-center">Encuesta de morbilidad sentida</h1>
            <div class="container" id="cards">
        <iframe src="https://docs.google.com/spreadsheets/d/13TR9j14OpZFyoZa7u2XneJDoMurkj8T1h9w5GJPi-5Q/edit?resourcekey#gid=1218322592" width="100%" height="640px"></iframe>
    </div>
        
      </div>
    </div>
</body>
</php>