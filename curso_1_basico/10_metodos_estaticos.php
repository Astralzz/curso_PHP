<?php

//Clase
class Operaciones
{

  //Variable estática constante
  public const _PI = 3.1473;
  //Variable estática
  public static string $Nombre = "EDAIN";

  //Métodos estáticos
  public static function sumar($n1, $n2)
  {
    return $n1 + $n2;
  }
  public static function restar($n1, $n2)
  {
    return $n1 - $n2;
  }
  public static function multiplicar($n1, $n2)
  {
    return $n1 * $n2;
  }
  public static function dividir($n1, $n2)
  {
    return $n1 / $n2;
  }
}

//Variables
$nu1 = rand(100, 9999);
$nu2 = rand(100, 9999);

//Llamar
echo "<h5>" . $nu1 . " mas " . $nu2 . " es igual a " . Operaciones::sumar($nu1, $nu2) . "</h5>";
echo "<h5>" . $nu1 . " menos " . $nu2 . " es igual a " . Operaciones::restar($nu1, $nu2) . "</h5>";
echo "<h5>" . $nu1 . " por " . $nu2 . " es igual a " . Operaciones::multiplicar($nu1, $nu2) . "</h5>";
echo "<h5>" . $nu1 . " entre " . $nu2 . " es igual a " . Operaciones::dividir($nu1, $nu2) . "</h5>";
echo "<h5>PI = " . Operaciones::_PI . "</h5>";
echo "<h5>Nombre = " . Operaciones::$Nombre . "</h5>";
