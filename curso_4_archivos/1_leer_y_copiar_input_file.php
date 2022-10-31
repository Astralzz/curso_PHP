<!-- Código PHP  -->
<?php
//Verificamos 
if ($_POST) {

  // --------- VALORES POR DEFECTO ---------
  echo "<h4>Lo que llego por defecto</h4>";
  //Vemos lo que nos llego y vemos las diferencias
  print_r($_POST);
  echo "<br>";
  print_r($_FILES);
  /* 

  Lo que se recibe en un archivo POST

  [indice] => valor

  Arreglo 1:/ print_r($_POST);
  Array 
  ( 
    de donde llego (botón)
    [botónEnviar] => Enviar 
  )

  Arreglo 2: / print_r($_FILES);
  Array 
  de donde llego (input file)
  ( [txtArchivo] => 
  sub arreglo
  Array(
    nombre 
   [name] => planeta.jpg 
    ???
   [full_path] => planeta.jpg 
    tipo
   [type] => image/jpeg 
    nombre temporal/ruta del servidor
   [tmp_name] => C:\xampp\tmp\phpEB1A.tmp 
    no de errores
   [error] => 0 
    tamaño en bytes
   [size] => 943135 
   )) */

  echo "<hr>";
  // --------- VALORE ESPECIFICO ---------
  echo "<h4>Obtener valor en especifico</h4>";
  //Nombre $_FILES[name = ""][indice del arreglo que llega]
  $NombreArchivo = $_FILES["txtArchivo"]["name"];
  echo "nombre del archivo: " . $NombreArchivo;

  echo "<hr>";
  // --------- COPIAR/MOVER ARCHIVO ---------
  echo "<h4>Mover archivo al la ruta de este php</h4>";
  //obtenemos nombre temporal
  $NombreTemporal = $_FILES["txtArchivo"]["tmp_name"];
  //Obtenemos archivo original para moverlo a una ruta especifica
  //move_uploaded_file(nueva ruta, nombre)
  move_uploaded_file($NombreTemporal, $NombreArchivo);
}
echo "<hr>";

?>

<!-- Código html -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleccionar archivos</title>
</head>

<body>

  <!-- Titulo -->
  <h2>Seleccionar archivos</h2>

  <!-- Formulario -->
  <!-- enctype="multipart/form-data" se pone para poder enviar información como archivos -->
  <form action="./valores_input_file.php" enctype="multipart/form-data" method="post">
    <!-- Selección de archivo -->
    Selecciona una imagen:
    <input type="file" name="txtArchivo" id="selectFile">

    <br><br>

    <!-- Boton -->
    <input type="submit" name="botónEnviar" value="Enviar">

  </form>
</body>

</html>