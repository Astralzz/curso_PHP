<?php

//Servidor/ip/?puerto
$SERVIDOR = "localhost:3307"; //127.0.0.1
//Usuario
$USUARIO = "root";
//Contraseña
$PASSWORD = "";
//Base de datos
$BD = "albun_curso_php";

try {

  //Conexión ((servidor, BD),usuario, contraseña )
  $Connection = new PDO("mysql:host=$SERVIDOR;dbname=$BD", $USUARIO, $PASSWORD);
  //Obtener acceso a los errores
  $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Si tubo éxito
  echo "<h1> ÉXITO, SE ESTABLECIÓ LA CONEXIÓN CON MYSQL</h1>";

  //LEER DATOS
  //Consulta
  $Sql = "SELECT * FROM `fotos`";

  //Creamos sentencia
  $Sentencia = $Connection->prepare($Sql);

  //Ejecutamos consulta
  $Sentencia->execute();

  //Obtenemos resultado
  $Resultado = $Sentencia->fetchAll();

  //IMPRIMIMOS RESULTADO
  //Mostramos
  echo "<h2> Resultado por defecto </h2>";
  print_r($Resultado);

  //Recorremos 1 vez
  echo "<h2> Resultado recorrido 1 ves </h2>";
  foreach ($Resultado as $i =>  $fila) {
    print_r("<b>Fila " . $i . ":</b> <br>");
    print_r($fila);
    echo "<br>";
  }

  //Recorremos arreglo 2 veces
  echo "<h2> Resultado recorrido 2 veces </h2>";
  foreach ($Resultado as $i =>  $fila) {
    //Mostramos fila
    print_r("<b>Fila " . $i . ":</b> <br>");
    print_r($fila);
    echo "<br>";
    //Recorremos fila
    foreach ($fila as $i => $columna) {
      //Mostramos columna
      print_r("<b>columna " . $i . ":</b> <br>");
      print_r($columna);
      echo "<br>";
    }

    echo "<br>";
    echo "<br>";
  }

  //Recorremos Solo los nombres
  echo "<h2> Nombres de la tabla </h2>";
  foreach ($Resultado as $i =>  $fila) {
    print_r("<b>Fila " . $i . ":</b> <br>");
    //Mostramos nombre
    echo "Nombre: " . $fila["nombre"];
    echo "<br>";
  }

  //Error en la conexión
} catch (PDOException $err) {
  echo "<h1> ERROR AL CONECTAR A MYSQL, err ->" . $err . " </h1>";
  //Error desconocido
} catch (Exception $err) {
  echo "<h1> ERROR INESPERADO, err ->" . $err . " </h1>";
}
