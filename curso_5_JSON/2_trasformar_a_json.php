<?php
// --------- TRASFORMAR A JSON ---------
echo "<h1>Trasformar a JSON</h1>";

// --------- ARREGLO A JSON ---------
echo "<h4>Arreglo a json</h4>";

//Arreglo de ejemplo
$ArrayEjemplo1 = array(
  "Edain" => 24,
  "Maria" => 32,
  "Antonio" => 89,
  "Eric" => 45,
  "Pedro" => 11,
  "Victor" => 18,
  "Michel" => 67
);
$ArrayEjemplo2 = array(
  "Empleados" => array(
    "Edain" => array("edad" => 23, "sexo" => 1, "Casado" => 0, "Cargo" => "Ingeniero"),
    "Maria" =>  array("edad" => 53, "sexo" => 0, "Casado" => 1, "Cargo" => "Abogado"),
    "Antonio" =>  array("edad" => 22, "sexo" => 1, "Casado" => 1, "Cargo" => "Licenciado"),
    "Eric" =>  array("edad" => 19, "sexo" => 1, "Casado" => 1, "Cargo" => "Ingeniero"),
    "Pedro" =>  array("edad" => 43, "sexo" => 1, "Casado" => 0, "Cargo" => "Medico"),
    "Linda" =>  array("edad" => 29, "sexo" => 0, "Casado" => 1, "Cargo" => "Químico"),
    "Michel" => array("edad" => 33, "sexo" => 0, "Casado" => 0, "Cargo" => "Maestro")
  ),
  "Carreras" => array(
    "Ingeniería" => array("Institución" => "Uagro", "Años" => 4.5, "Precio" => 45000),
    "Matemáticas" => array("Institución" => "Tecnológico", "Años" => 5, "Precio" => 50000),
    "Química" => array("Institución" => "Uagro", "Años" => 7, "Precio" => 35000),
    "Física" => array("Institución" => "CBTIS", "Años" => 4.5, "Precio" => 55000),
    "Estadística" => array("Institución" => "Abierta", "Años" => 3, "Precio" => 15000),
  )
);
//Mostramos
print_r("Arreglo 1:  <br>");
print_r($ArrayEjemplo1);
print_r("<br>");
print_r("Arreglo 2:  <br>");
print_r($ArrayEjemplo2);
print_r("<br>");
print_r("<br>");



//Convertimos con json_encode
$NuevoJson1 = json_encode($ArrayEjemplo1);
$NuevoJson2 = json_encode($ArrayEjemplo2);
//Mostramos
print_r("JSON 1: <br>");
print_r($NuevoJson1);
print_r("<br>");
print_r("JSON 2: <br>");
print_r($NuevoJson2);
print_r("<br>");
echo "<hr>";


// --------- MOSTRAR VALOR DECODIFICADO ---------
echo "<h4>Valor decodificado del JSON con print_r() </h4>";
//Decodificamos
$ValorDecodificado1 = json_decode($NuevoJson1);
$ValorDecodificado2 = json_decode($NuevoJson2);

//Mostramos
print_r("JSON decodificado 1: <br>");
print_r($ValorDecodificado1);
print_r("<br>");
print_r("JSON decodificado 2: <br>");
print_r($ValorDecodificado2);
print_r("<br>");
echo "<hr>";