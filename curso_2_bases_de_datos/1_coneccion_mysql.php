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

  //INSERTAR DATOS
  //Consulta
  $Sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`, `descripcion`) VALUES (NULL, 'Naruto.png', 'C:\\Users\\Jesus C\\Pictures\\2 monitores\\1', 'Naruto peleando con Pain');";

  //Env consulta
  $Connection->exec($Sql);

  //Error en la conexión
} catch (PDOException $err) {
  echo "<h1> ERROR AL CONECTAR A MYSQL, err ->" . $err . " </h1>";
  //Error desconocido
} catch (Exception $err) {
  echo "<h1> ERROR INESPERADO, err ->" . $err . " </h1>";
}
