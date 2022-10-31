<?php

//Url
$Url = "https://api.dailymotion.com/videos";

//Arreglo para poder leer la inf http
// y desactivar su restricción
$Opciones = array(
  "ssl" => array(
    "verify_peer" => false,
    "verify_peer_name" => false
  )
);

//Leer todo el contenido y hacerlo string
// file_get_contents(URL,lectura,desactivar lectura)
$Respuesta = file_get_contents($Url, false, stream_context_create($Opciones));

//Convertimos a json
$ObjRespuesta = json_decode($Respuesta);


//Mostramos
echo "<h3>JSON por defecto</h3>";
print_r($ObjRespuesta);
echo "<hr>";

//Recorremos
echo "<h3>JSON recorrido</h3>";
foreach ($ObjRespuesta->list as $key => $value) {
  $Mostrar = "Video " . $key . "<br>";
  $Mostrar .= "ID: " . $value->id . "<br>";
  $Mostrar .= "Titulo: " . $value->title . "<br>";
  $Mostrar .= "Canal: " . $value->channel . "<br>";
  $Mostrar .= "Dueño: " . $value->owner . "<br>";
  print_r($Mostrar);
  echo "<br>";
}

echo "<hr>";

?>
<!-- Código html -->
<h3>Lista de videos</h3>
<!-- Mostramos los datos en una lista -->
<ul>
  <!-- Recorremos -->
  <?php foreach ($ObjRespuesta->list as $key => $value) { ?>

    <!-- Mostramos -->
    <li><?php echo $value->title ?> | <?php echo $value->channel ?></li>

  <?php } ?>
</ul>