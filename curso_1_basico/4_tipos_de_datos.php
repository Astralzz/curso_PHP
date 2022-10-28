<?php

//HTM EN PHP
define("TITULO", "Tipos de datos");
echo "<h2>" . TITULO . "</h2>";

//Tipos de datos
$Entero = 6234;
$Texto = "Hola";
$Decimal = 63.085;
$Booleano = false;
$Nulo = null;

//Condicional
if (!$Booleano) {
  echo "Dato entero = " . $Entero . "<br>";
  echo "Dato texto = " . $Texto . "<br>";
  echo "Dato flotante = " . $Decimal . "<br>";
  echo "Dato booleano = " . $Booleano . "<br>";
  echo "Dato nulo = " . $Nulo . "<br>";
}

//HTM EN PHP
echo "<h2>Valor contante</h2>";


//Valor constante
define("VALOR", 123);
echo " Valor contante = " . VALOR;
