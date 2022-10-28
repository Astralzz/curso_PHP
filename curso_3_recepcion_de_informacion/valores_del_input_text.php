<?php

//Nombre
$Nombre = "";
$txtLenguaje = "";
$Pasatiempo = array(
  "Pro" => "Programar",
  "Dep" => "Deporte",
  "Vid" => "Videojuegos",
  "Dor" => "Dormir"
);

//Comprobamos
if ($_POST) {

  //Si nos llego información
  $Nombre = (isset($_POST["txtNombre"]) ? $_POST["txtNombre"] : "Valor vació");
  $txtLenguaje = (isset($_POST["txtLenguaje"]) ? $_POST["txtLenguaje"] : "Valor vació");

  //Recorremos
  foreach ($Pasatiempo as $key => $value) {
    //Comprobamos
    $value = (isset($_POST[$key]) == "SI") ? "checked" : "";
    //Asignamos
    $Pasatiempo[$key] = $value;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario_1</title>
</head>

<body>

  <!-- código php en html -->

  <!-- Si ubo envió -->
  <?php if ($_POST) { ?>
    <!-- Saludo -->
    <strong>Hola <?php echo $Nombre ?> </strong>
  <?php } ?>

  <br>

  <!-- Mostrar el lenguaje escogido -->
  <!-- Si ubo envió -->
  <?php if ($_POST) { ?>
    <!-- Mensaje -->
    <strong>Tu lenguaje favorito es <?php echo $txtLenguaje ?> </strong>
  <?php } ?>

  <br>

  <!-- Mostrar pasatiempos-->
  <!-- Si ubo envió -->
  <?php if ($_POST) {
  ?>
    <strong>Tus pasatiempos son:
    <?php
    //Recorremos
    foreach ($Pasatiempo as $key => $value) {
      if ($value == "checked") {
        //Vemos opciones
        switch ($key) {
          case "Pro":
            echo " Programar - ";
            break;
          case "Dep":
            echo " Deporte - ";
            break;
          case "Vid":
            echo " Videojuegos - ";
            break;
          case "Dor":
            echo " Dormir - ";
            break;
        }
      }
    }
  } ?>
    </strong>
    <br>


    <!-- Código HTML -->

    <!-- Formulario -->
    <form action="./valores_del_input_text.php" method="post">

      <!-- Nombre con un input de tipo texto -->

      Nombre
      <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $Nombre; ?>">
      <br><br>

      <!-- Opciones con inputs de tipo radio -->
      <!-- checked es para marcar un radio -->

      ¿Que lenguaje prefieres?:
      <br> Java <input value="Java" type="radio" name="txtLenguaje" id="" <?php echo ($txtLenguaje == "Java") ? "checked" : ""; ?>>
      <br> C <input value="C" type="radio" name="txtLenguaje" id="" <?php echo ($txtLenguaje == "C") ? "checked" : ""; ?>>
      <br> JavaScrip <input value="JavaScrip" type="radio" name="txtLenguaje" id="" <?php echo ($txtLenguaje == "JavaScrip") ? "checked" : ""; ?>>
      <br> Python <input value="Python" type="radio" name="txtLenguaje" id="" <?php echo ($txtLenguaje == "Python") ? "checked" : ""; ?>>
      <br> PHP <input value="PHP" type="radio" name="txtLenguaje" id="" <?php echo ($txtLenguaje == "PHP") ? "checked" : ""; ?>>
      <br><br>

      <!-- Opciones con input de tipo checkbox -->
      Tus pasatiempos son...
      <br> Programar <input <?php echo $Pasatiempo["Pro"]; ?> type="checkbox" name="Pro" value="SI" id="">
      <br> Deporte <input <?php echo $Pasatiempo["Dep"]; ?> type="checkbox" name="Dep" value="SI" id="">
      <br> Videojuegos <input <?php echo $Pasatiempo["Vid"]; ?> type="checkbox" name="Vid" value="SI" id="">
      <br> Dormir <input <?php echo $Pasatiempo["Dor"]; ?> type="checkbox" name="Dor" value="SI" id="">
      <br><br>


      <!-- Boton enviar -->
      <button type="submit" value="enviar">Enviar</button>


    </form>

</body>

</html>