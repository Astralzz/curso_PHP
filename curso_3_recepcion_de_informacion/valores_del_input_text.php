<?php

//Nombre
$Nombre = "";
//Lenguaje F
$txtLenguaje = "";
//Pasatiempos
$Pasatiempo = array(
  "Pro" => "Programar",
  "Dep" => "Deporte",
  "Vid" => "Videojuegos",
  "Dor" => "Dormir"
);
//Comida F
$ComidaF = "";
//Comentario
$Comentario = "";

//Comprobamos
if ($_POST) {

  //Si nos llego información
  $Nombre = (isset($_POST["txtNombre"]) ? $_POST["txtNombre"] : "");
  $txtLenguaje = (isset($_POST["txtLenguaje"]) ? $_POST["txtLenguaje"] : "");

  //Recorremos
  foreach ($Pasatiempo as $key => $value) {
    //Comprobamos
    $value = (isset($_POST[$key]) == "SI") ? "checked" : "";
    //Asignamos
    $Pasatiempo[$key] = $value;
  }

  //Seleccionamos opción
  $ComidaF = (isset($_POST["txtComida"]) ? $_POST["txtComida"] : "");

  //Obtenemos valor del area
  $Comentario = (isset($_POST["txtArea"]) ? $_POST["txtArea"] : "");
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
  <?php if (isset($_POST["txtNombre"]) && $Nombre) { ?>
    <!-- Saludo -->
    <strong>Hola <?php echo $Nombre ?> </strong>
    <br>
  <?php } ?>


  <!-- Mostrar el lenguaje escogido -->
  <!-- Si ubo envió -->
  <?php if (isset($_POST["txtLenguaje"])) { ?>
    <!-- Mensaje -->
    <strong>Tu lenguaje favorito es <?php echo $txtLenguaje ?> </strong>
    <br>
  <?php } ?>

  <!-- Mostrar pasatiempos-->
  <!-- Si ubo envió -->
  <?php if (
    isset($_POST["Pro"]) || isset($_POST["Dep"])
    || isset($_POST["Vid"]) || isset($_POST["Dor"])
  ) {
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
      ?>
    </strong>
    <br>
  <?php
  }
  ?>

  <!-- Mostrar comida favorita-->
  <!-- Si ubo envió -->
  <?php if (isset($_POST["txtComida"]) && $ComidaF != "") { ?>
    <!-- Saludo -->
    <strong>Tu comida favorita es <?php echo $ComidaF ?> </strong>
    <br>
  <?php } ?>

  <!-- Mostrar comentario puesto-->
  <!-- Si ubo envió -->
  <?php if (isset($_POST["txtArea"]) && $Comentario != "") { ?>
    <!-- Saludo -->
    <strong>Tu comentario fue: <?php echo "<br>" . $Comentario ?> </strong>
    <br>
  <?php } ?>

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

    <!-- Comida favorita con select -->
    ¿Que comida te gusta mas?... <br>
    <select name="txtComida" id="selectComida">
      <option value=""></option>
      <option value="Tacos" <?php echo $ComidaF == "Tacos" ? "selected" : ""; ?>>Tacos</option>
      <option value="Hamburguesa" <?php echo $ComidaF == "Hamburguesa" ? "selected" : ""; ?>>Hamburguesa</option>
      <option value="Pizza" <?php echo $ComidaF == "Pizza" ? "selected" : ""; ?>>Pizza</option>
      <option value="Ensalada" <?php echo $ComidaF == "Ensalada" ? "selected" : ""; ?>>Ensalada</option>
    </select>
    <br><br>

    <!-- Comentario con un textArea -->
    Escribe un comentario... <br>
    <textarea name="txtArea" id="Area" cols="30" rows="10">
    <?php //Ponemos el comentario si ahi alguno 
    echo (isset($_POST["txtArea"]) && $Comentario != "") ? $Comentario : "";
    ?></textarea>
    <br><br>

    <!-- Boton enviar -->
    <button type="submit" value="enviar">Enviar</button>


  </form>

</body>

</html>