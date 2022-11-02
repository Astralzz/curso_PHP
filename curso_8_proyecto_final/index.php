<!-- CABECERA -->
<?php include "./cabecera.php" ?>

<!-- Incluimos la conexión -->
<?php include "./conexion.php" ?>

<?php
//Variables
$BaseDeDatos = "albun_curso_php";
//Creamos una conexion
$ObjConexion = new ConectarBD($BaseDeDatos);
//Datos de la tabla
$DatosTabla = null;

//Conectamos
if ($ObjConexion->conectar()) {
  //Consulta
  $Consulta = "SELECT * FROM `archivos`";
  //Obtenemos datos
  $DatosTabla = $ObjConexion->consultarInf($Consulta);
} else {
  //Ponemos nulo
  $ObjConexion = null;
}

?>

<!-- CUERPO DEL HTML | BODY -->
<div class="row align-items-md-stretch" style="width: 100%;">
  <div style="width: 100%;" class="col-md-6">
    <div class="h-100 p-5 text-white bg-dark border rounded-3">
      <h1>Bienvenid@s</h1>
      <p>Portafolio privado, por Astralz.</p>
      <hr class="my-2">
      <p>Archivos e imágenes.</p>
      <!-- Albun de fotos -->
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php
          //Si esta todo bien
          if ($DatosTabla !== null && $ObjConexion !== null) {
            foreach ($DatosTabla as $value) {
          ?>
              <div class="col">
                <div class="card">
                  <!-- Imagen -->
                  <img src=<?php echo './' . $value['ruta'] ?> class="card-img-top" alt=<?php echo $value['ruta'] ?>>
                  <div class="card-body text-dark">
                    <!-- Nombre -->
                    <h5 class="card-title"><?php echo $value["nombre"] ?></h5>
                    <!-- Descripcion -->
                    <p class="card-text"><?php echo $value["descripcion"] ?></p>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- PIE DE PAGINA -->
<?php include "./pie.php" ?>