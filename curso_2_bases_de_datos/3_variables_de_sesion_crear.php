<?php

// ARCHIVO 1 : CREAR VARIABLES DE SESIÓN

//session_start():
//Sirve para mantener información en
//cualquier pagina mientras el navegador
//este abierto, cuando este se cierre
//la variable iguar se eliminara

//Abrimos sesión
session_start();

//Variable de sesión
//Usuario
$_SESSION["Usuario"] = "Astralz";
//Estado
$_SESSION["Status"] = false;


echo "<h1>SE CREO LA SESIÓN</h1>";
