<!-- Incluimos cabecera -->
<?php include "./cabecera.php" ?>

<!-- Incluimos la conexión -->
<?php include "./conexion.php" ?>

<?php
//Funciones
function adjuntarArchivo(array $Archivo, string $rutaNueva)
{
  //Obtenemos nombre temporal
  $rutaTemporal = $Archivo["tmp_name"];

  //Movemos archivo a la ruta nueva
  move_uploaded_file($rutaTemporal, $rutaNueva);
}


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


//INSERTAR
//Cuando haya envió post
if ($_POST && $ObjConexion !== null) {
  //Comprobamos que sea el nombre y el archivo
  if (isset($_POST["nombre"]) && isset($_FILES["archivo"])) {
    //Obtenemos datos
    $Nombre = $_POST["nombre"]; //Nombre
    $ArchivoNombre = $_FILES["archivo"]["name"]; //Nombre del archivo
    $Descripcion = (isset($_POST["descripcion"])) ? $_POST["descripcion"] : ""; //Descripcion

    //Obtenemos fecha 
    $fechaActual = new DateTime();
    //Convertimos fecha a dígitos
    $fechaActual = $fechaActual->getTimestamp();
    //Actualizamos ruta
    $ruta = "archivosGuardados/" . $fechaActual . "_" . $ArchivoNombre;

    //Creamos consulta
    $Consulta = "INSERT INTO `archivos` 
    (`id`, `nombre`, `ruta`, `descripcion`) 
    VALUES (NULL, '$Nombre', '$ruta', '$Descripcion');";
    //Agregamos
    $Respuesta = $ObjConexion->ejecutarSql($Consulta);

    //Comprobamos
    if ($Respuesta !== null) {
      //Guardamos archivo 
      $Archivo = $_FILES["archivo"];
      //Adjuntamos archivo a la carpeta img
      adjuntarArchivo($Archivo, $ruta);
      //Actualizamos pagina
      header("Location:./portafolio.php");
    }
  }
}

//ELIMINAR
//Cuando haya envió get
if ($_GET && $ObjConexion !== null) {

  //Comprobamos que sea el de eliminar
  if (isset($_GET["idEliminar"])) {
    //Guardamos id
    $idEliminar = $_GET["idEliminar"];
    //Creamos consulta para obtener la ruta
    $Sql = "SELECT ruta FROM archivos WHERE `archivos`.`id` = $idEliminar";
    //Buscamos ruta
    $respuestaBúsqueda = $ObjConexion->consultarInf($Sql);

    //Comprobamos búsqueda para eliminar en la bd
    if ($respuestaBúsqueda !== null) {
      //Creamos consulta
      $Sql = "DELETE FROM archivos WHERE `archivos`.`id` = $idEliminar";
      //Eliminamos
      $respuestaEliminar = $ObjConexion->ejecutarSql($Sql);

      //Comprobamos para eliminar archivo
      if ($respuestaEliminar !== null) {
        //Obtenemos ruta
        $ruta =  $respuestaBúsqueda[0]["ruta"];
        //Eliminamos archivo con la ruta
        unlink($ruta);
        //Actualizamos pagina
        header("Location:./portafolio.php");
      }
    }
  }
}
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
          <input required name="nombre" type="text" class="form-control form-control-sm">
        </div>
        <!-- Selección de archivo -->
        <div class="mb-3">
          <label for="formFile" class="form-label">Selecciona un archivo</label>
          <input required name="archivo" type="file" class="form-control form-control-sm">
        </div>
        <!-- Descripcion  -->
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
          <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
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
              <th scope="col">Imagen</th>
              <th scope="col">Descripcion</th>
              <th style="text-align: center;" scope="col">Acción</th>
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
                  <!-- Nombre de la imagen -->
                  <td><?php echo $value["nombre"] ?></td>
                  <!-- Ruta / Imagen -->
                  <td>
                    <!-- <php echo $value["ruta"] ?> -->
                    <img width="120" src=<?php echo './' . $value['ruta'] ?> class="img-fluid" alt=<?php echo $value['ruta'] ?>>
                  </td>
                  <!-- Descripcion -->
                  <td><?php echo $value["descripcion"] ?></td>
                  <td style="text-align: center;">
                    <!-- Eliminar -->
                    <button onclick="borrarDato(this)" value=<?php echo $value["id"] ?> type="button" class="btn btn-danger">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </td>
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