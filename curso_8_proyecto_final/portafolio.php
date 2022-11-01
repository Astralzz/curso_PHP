<!-- Incluimos cabecera -->
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


//Cuando haya envió
if ($_POST) {
}
//   //Ejecutamos una consulta
//   $Consulta = "INSERT INTO `archivos` 
// (`id`, `nombre`, `ruta`, `descripcion`) 
// VALUES (NULL, 'ejemplo3', 'seffffss', 'aaftttd');";
//   $ObjConexion->ejecutarSql($Consulta);

?>

<!-- Portafolio -->
<div class="row align-items-md-stretch">

  <!-- Introducir nuevo archivo -->
  <div class="card" style="width: 30%; display: block;">
    <!-- Titulo -->
    <div class="card-header">
      Introducir nuevo archivo
    </div>
    <!-- Formulario -->
    <div class="card-body">
      <!-- enctype="multipart/form-data" = Recepcionar los archivos/Ponerlo -->
      <form action="./portafolio.php" method="post" enctype="multipart/form-data">
        <!-- Nombre -->
        <div class="mb-3">
          <label for="Imagen 1" class="form-label">Nombre del archivo</label>
          <input name="nombre" type="text" class="form-control form-control-sm">
        </div>
        <!-- Selección de archivo -->
        <div class="mb-3">
          <label for="formFile" class="form-label">Selecciona un archivo</label>
          <input name="archivo" type="file" class="form-control form-control-sm">
        </div>
        <!-- Descripcion  -->
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <!-- Boton -->
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </form>
    </div>
  </div>

  <!-- Tabla de archivos -->
  <div class="card" style="width: 70%; display: block;">
    <!-- Titulo -->
    <div class="card-header">
      Tabla de archivos
    </div>
    <!-- Tabla -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <!-- Títulos -->
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nombre</th>
              <th scope="col">Archivo</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <!-- Filas -->
          <tbody>
            <?php
            //Si esta todo bien
            if ($DatosTabla !== null && $ObjConexion !== null) {
              foreach ($DatosTabla as $value) {
            ?>
                <tr class="FilaT">
                  <td scope="row">1</td>
                  <td><?php echo $value["nombre"] ?></td>
                  <td><?php echo $value["ruta"] ?></td>
                  <td><?php echo $value["descripcion"] ?></td>
                  <td>Eliminar</td>
                </tr>
            <?php }
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<!-- Incluimos pie de pagina -->
<?php include "./pie.php" ?>