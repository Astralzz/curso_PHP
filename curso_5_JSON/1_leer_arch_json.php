<?php

// --------- LEER JSON ---------
echo "<h1>Leer JSON</h1>";

//Ejemplo de JSON
$EjemploJSON = '[
  {"nombre": "juan", "edad": 33, "casado": 0},
  {"nombre": "Pedro", "edad": 44, "casado": 0},
  {"nombre": "Maria", "edad": 12, "casado": 0},
  {"nombre": "Karla", "edad": 25, "casado": 1},
  {"nombre": "Edain", "edad": 24, "casado": 0},
  {"nombre": "Antonio", "edad": 61, "casado": 1}
]';

//Decodificar JSON con php / json_decode
$Resultado = json_decode($EjemploJSON);

echo "<hr>";
// --------- MOSTRAR POR DEFECTO ---------
echo "<h4>Valor del JSON con print_r() </h4>";
//Mostramos
print_r($Resultado);
//Resultado con print_r
/*
 (
    [0] => stdClass Object
        (
            [nombre] => juan
            [edad] => 33
            [casado] => 0
        )

    [1] => stdClass Object
        (
            [nombre] => Pedro
            [edad] => 44
            [casado] => 0
        )

    [2] => stdClass Object
        (
            [nombre] => Maria
            [edad] => 12
            [casado] => 0
        )

    [3] => stdClass Object
        (
            [nombre] => Karla
            [edad] => 25
            [casado] => 1
        )

    [4] => stdClass Object
        (
            [nombre] => Edain
            [edad] => 24
            [casado] => 0
        )

    [5] => stdClass Object
        (
            [nombre] => Antonio
            [edad] => 61
            [casado] => 1
        )

 )
*/

echo "<hr>";
// --------- MOSTRAR CON 1 FOREACH ---------
echo "<h4>Mostrar datos recorridos 1 ves</h4>";

//Recorremos el resultado
foreach ($Resultado as $Persona) {
  echo "persona:" . "<br>";
  print_r($Persona);
  echo "<br>";
}

echo "<hr>";
// --------- MOSTRAR DATOS MAS ESPECÍFICOS ---------
echo "<h4>Mostrar datos recorridos 1 ves, mas especifico</h4>";

//Recorremos el resultado
foreach ($Resultado as $Persona) {
  echo "persona:" . "<br>";
  //Nombre
  $Mostrar = "Nombre: " . $Persona->nombre . ", ";
  $Mostrar .= "edad: " . $Persona->edad . ", ";
  $Mostrar .= "Casado?: " . (($Persona->casado === 1) ? "SI" : "NO") . " ";
  echo $Mostrar;
  echo "<br>";
}

echo "<hr>";
// --------- MOSTRAR CON 2 FOREACH ---------
echo "<h4>Mostrar datos recorridos 2 veces</h4>";

//Recorremos el resultado
foreach ($Resultado as $Persona) {
  echo "persona:" . "<br>";
  //sub recorrido
  foreach ($Persona as $p) {
    print_r($p);
    echo "  ";
  }
  echo "<br>";
}
