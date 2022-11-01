<!-- CUERPO PHP -->
<?php
//Iniciamos session_start()
session_start();

//Destruimos la sesión
session_destroy();

//Nos redireccionamos al login con header()
header("location:./login.php");
