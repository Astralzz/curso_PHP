<?php

//TITULO
echo "<h1>FUNCIONES ESPECIALES</h1>";

//NÚMEROS ALEATORIOS (rand())
echo "<hr>";
echo "<h4>Números aleatorios</h4>";
//Numero aleatorio
define("DESDE", -50);
define("ASTA", 50);

//Bucle
for ($i = 0; $i < 10; $i++) {
  //Numero aleatorio
  $nAleatorio = rand(DESDE, ASTA);
  echo "<a>" .  $i + 1 . " = [ " . $nAleatorio . " ] </a>";
  echo "<br>";
}

//CONVERTIR A MAYÚSCULAS O MINÚSCULAS 
//(strtoupper() / strtolower())
echo "<hr>";
echo "<h4>Mayúsculas o minúsculas</h4>";
//Texto
define("TEXTO", "HoLa MunDo");
//Convertir a mayúsculas
define("TEXT_MAYÚSCULA", strtoupper(TEXTO));
//Convertir a mayúsculas
define("TEXT_MINÚSCULA", strtolower(TEXTO));


//Mostramos
echo "<a>" . TEXTO . "</a>";
echo "<br>";
echo "<a>" . TEXT_MAYÚSCULA . "</a>";
echo "<br>";
echo "<a>" . TEXT_MINÚSCULA . "</a>";

//FECHA
echo "<hr>";
echo "<h4>Fecha</h4>";

//Obtenemos fecha
//y = año con 2 dig = 99 o 22 o 12
//Y = año con 4 dig = 1999 o 2022 o 2012
//m = mes = 01 a 12
//M = mes en texto de 3 dígitos
//j = dia del mes sin ceros al inicio
//d = dia = 01 al 31
//D = dia en texto de 3 dígitos
$Fecha1 = date("y-m-d");
$Fecha2 = date("Y/M/D");
$Fecha3 = date("j");
//Mostramos
echo "<a> fecha a: " . $Fecha1 . "</a>";
echo "<br>";
echo "<a> fecha b: " . $Fecha2 . "</a>";
echo "<br>";
echo "<a> es el dia " . $Fecha3 . "</a>";
