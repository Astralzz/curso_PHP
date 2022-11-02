<!-- CUERPO PHP -->
<?php
//Obtenemos la ruta actual
$urlActual = $_SERVER["REQUEST_URI"];
// echo "nav-link " . (($urlActual === "/cursoPHP_1/curso_8_proyecto_final/"
// || $urlActual === "/cursoPHP_1/curso_8_proyecto_final/index.php")
// ? "active" : "");
//Verificar si emos iniciado sesión

//Iniciamos session_start()
session_start();

//Verifica si existe una sesión activa
if (isset($_SESSION["sesión"])) {
  //Guardamos datos
  $Sesión = $_SESSION["sesión"];
  //Verificamos si esta activa
  if ($Sesión["estado"]) {
    //print_r($Sesión);
  }

  //Si no
} else {
  //Vamos al login
  header("location:./login.php");
}

?>


<!-- cabecera de la pagina -->
<!DOCTYPE html>
<html lang="en">
<!-- Cabecera -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Iconos Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="./style.css" media="screen" />
  <title>Portafolio</title>
</head>

<!-- Cuerpo de pagina -->

<body class="body-pagina">
  <br>
  <!-- container / Barra de navegación -->
  <div class="container" style="width: 100%; background-color: white;">
    <!-- Barra de inicio -->
    <ul class="nav nav-tabs">
      <!-- Inicio -->
      <li class="nav-item">
        <!-- Comprobamos en que clase estamos -->
        <a class="nav-link text-dark" href="./index.php">
          <i class="bi bi-house-fill"></i>
          Inicio
        </a>
      </li>
      <!-- Portafolio -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="./portafolio.php">
          <i class="bi bi-folder-fill"></i>
          Portafolio</a>
      </li>
      <!-- Cerrar cesión -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="./cerrar.php">
          <i class="bi bi-x-circle-fill"></i>
          Cerrar sesión</a>
      </li>
    </ul>