<?php

// ARCHIVO 2 : MOSTRAR VARIABLES DE SESIÓN

//Abrimos sesión
session_start();

//Comprobamos si existen las variables o están vacías
if (isset($_SESSION["Usuario"]) && isset($_SESSION["Status"])) {
  //Mostramos
  echo "Sesión iniciada: <br>";
  echo $_SESSION["Usuario"] . " status: " . ($_SESSION["Status"] ? "Conectado" : "Desconectado");
} else {
  echo "<h1>ERROR, NO AHI REGISTROS DE SESIÓN</h1>";
}
