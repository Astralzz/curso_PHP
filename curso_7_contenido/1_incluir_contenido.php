<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contenido externo</title>
</head>

<!-- Ponemos el contenido de el otro archivo -->

<body>
  <!-- USANDO INCLUDE Y REQUIRE -->
  <h1>USANDO INCLUDE Y REQUIRE</h1>
  <hr>

  <!-- include:
   SI existe un error muestra la advertencia 
   pero seguirá poniendo la demás sintaxis -->
  <h3>Usando include:</h3> <br>
  <?php include "./1_contenido_include.php"; ?>
  <!-- provocamos un error -->
  <?php include "./pagina que no existe"; ?>
  <br>
  Hola estoy en la sección de include y siempre me mostrare
  <hr>

  <!-- require 
    SI existe un error deja de mostrar toda la 
   pagina del error en adelante-->
  <h3>Usando require():</h3> <br>
  <?php require("./1_contenido_require.php"); ?>
  <!-- provocamos un error -->
  <?php require("./pagina que no existe"); ?>
  <br>
  Hola estoy en la sección de require y me mostrare si no ahi errores tras mio
  <hr>

</body>

</html>