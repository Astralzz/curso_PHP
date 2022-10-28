<?php
//MÉTODO GET (RECIBIR INF)
//GET = Muestra los datos en la url para poder verlos

//Si llego
if ($_GET) {

  $Nombre = $_GET["txtNombre"];
  $Apellido_P = $_GET["txtApellido_P"];
  $Apellido_M = $_GET["txtApellido_M"];

  //Imprimimos nombre
  echo "Hola " . $Nombre . " " . $Apellido_P . " " . $Apellido_M;
}
