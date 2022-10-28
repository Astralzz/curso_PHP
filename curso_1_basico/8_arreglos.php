<?php

//ARREGLO NORMAL
echo "<h5>Arreglo normal</h5>";

//Creamos un arreglo
$ArregloFrutas = array("Manzana", "Pera", "Mango");
//Mostramos
// echo $ArregloFrutas; //Error
print_r($ArregloFrutas); //Correcto

//Recorremos
for ($i = 0; $i < 3; $i++) {
  echo "<br>";
  //Dato en especifico
  echo "Valor [" . $i . "] = " . $ArregloFrutas[$i];
}


//ARREGLO CON INDICES MANUALES
echo "<h5>Arreglo con indices manuales</h5>";

//Creamos un arreglo
$ArregloFrutas2 = array("M" => "Manzana", "P" => "Pera", 3 => "Mango");
//Mostramos
// echo $ArregloFrutas; //Error
print_r($ArregloFrutas2); //Correcto
//Recorremos
foreach ($ArregloFrutas2 as $i => $Fruta) {
  echo "<br>";
  //Dato en especifico
  echo "Valor [" . $i . "] = " . $Fruta;
}


//INSERTAR DATOS
echo "<h5>Insertar datos</h5>";
//Función
function mostrarArray($Array, $n = "??")
{
  //Cadena
  $Cadena = "Arreglo " . $n . " <br>";
  //Recorremos
  foreach ($Array as $key => $value) {
    $Cadena .= "Valor [" . $key . "] = " . $value;
    $Cadena .= "<br>";
  }
  //Devolvemos
  return $Cadena;
}
//Creamos un arreglo
$ArregloFrutas3 = array("Ma" => "Manzana", "Pe" => "Pera", "Mg" => "Mango");
//Mostramos
echo mostrarArray($ArregloFrutas3, 1);
//Añadimos dato al final
array_push($ArregloFrutas3, "Mandarina");
//Mostramos
echo mostrarArray($ArregloFrutas3, 2);
//Añadimos dato al final
array_push($ArregloFrutas3, 45, "Durazno", "Mango");
//Mostramos
echo mostrarArray($ArregloFrutas3, 3);
//Añadimos dato al final
$ArrayAux = array("Ln" => "Luna", "Sl" => "Sol");
array_push($ArregloFrutas3,45.556);
//Mostramos
echo mostrarArray($ArregloFrutas3, 4);


/*//Otras funciones
array_pop() - Extrae el último elemento del final del array
array_shift() - Quita un elemento del principio del array
array_unshift() - Añadir al inicio de un array uno a más elementos
*/