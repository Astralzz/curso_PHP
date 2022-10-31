<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- USANDO INCLUDE Y REQUIRE -->
  <h1>USANDO INCLUDE_ONCE Y REQUIRE:ONCE</h1>

  <!-- A diferencia de los originales include_once y require_once
        evitaran que se repita el contenido si obtenemos 2 o mas veces 
        el contenido de una pagina -->

  <h3>Usando include_once:</h3> <br>
  <!-- Usamos el método -->
  <?php include_once "./1_contenido_include.php"; ?>
  <!-- llamamos de nuevo a la misma pagina pero esta al 
    ya usarla no se volverá a repetir-->
  <br><?php include_once "./1_contenido_include.php"; ?>
  <br><?php include_once "./1_contenido_include.php"; ?>
  <br><?php include_once "./1_contenido_include.php"; ?>
  <br><?php include_once "./1_contenido_include.php"; ?>

  <hr>


  <h3>Usando require():</h3> <br>
  <?php require("./1_contenido_require.php"); ?>
  <!-- llamamos de nuevo a la misma pagina pero esta al 
    ya usarla no se volverá a repetir-->
  <br><?php require_once("./1_contenido_require.php"); ?>
  <br><?php require_once("./1_contenido_require.php"); ?>
  <br> <?php require_once("./1_contenido_require.php"); ?>
  <br> <?php require_once("./1_contenido_require.php"); ?>

  <hr>

</body>

</html>