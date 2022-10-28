<!-- Códigos PHP -->
<?php

//Si ubo eun envió
if ($_POST) {
  //Método POST - ENVIAR
  //POST = Recepciona los datos para no poder verlos
  //Revivir inf de formularioPOST
  $Nombre = $_POST["txtNombre"];
  $Apellido_P = $_POST["txtApellido_P"];
  $Apellido_M = $_POST["txtApellido_M"];

  //Imprimimos nombre
  echo "Hola " . $Nombre . " " . $Apellido_P . " " . $Apellido_M;
}

?>

<!-- AÑADIR HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<!-- Cuerpo -->

<body>
  <h1>Pagina HTML</h1>

  <h3>Método POST</h3>
  <!-- Formulario POST -->
  <form class="formularioPOST" action="./2_metodoPOST.php" method="post">
    Nombre:
    <!-- Nombre  -->
    <input type="text" name="txtNombre">
    <br>
    Apellido paterno:
    <!-- Apellido p  -->
    <input type="text" name="txtApellido_P">
    <br>
    Apellido materno:
    <!-- Apellido m  -->
    <input type="text" name="txtApellido_M">
    <br>
    <!-- Boton input enviar -->
    <input type="submit" value="enviar">
  </form>

</body>

</html>