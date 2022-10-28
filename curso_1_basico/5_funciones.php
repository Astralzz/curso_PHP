<?php
try {

  //Calculo
  function calculoMatematico($n1 = 0, $n2 = 0, $opc = "--")
  {
    //Opción
    switch ($opc) {

      case "+":
        return $n1 + $n2;
      case "-":
        return $n1 - $n2;
      case "*":
        return $n1 * $n2;
      case "/":
        return $n1 / $n2;
      default:
        return null;
    }
  }

  //Si ubo get
  if ($_GET) {
    //Numero 1
    $Numero1 = $_GET["n1"];
    //Numero 2
    $Numero2 = $_GET["n2"];
    //Opción
    $opción = $_GET["opción"];


    //Convertimos a entero
    $Numero1 = (int) $Numero1;
    $Numero2 = (int) $Numero2;

    //Resultado
    define("RESULTADO", calculoMatematico($Numero1, $Numero2, $opción));

    //Mostramos
    echo "<h4>" . $Numero1 . " " . $opción, " " . $Numero2 . " es igual a " . RESULTADO . "</h4>";
  }
} catch (Exception $e) {
  echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
