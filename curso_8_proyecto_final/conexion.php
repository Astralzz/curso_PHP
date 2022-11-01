<!-- CONEXIÓN CON LA BASE DE DATOS -->
<?php

//Clase para conectarse
class ConectarBD
{

  //Variables
  private PDO $Conexión;
  private string $Servidor = "localhost:3307"; //127.0.0.1
  private string $Usuario = "root";
  private string $Password = "";
  private string $BaseDatos;
  private bool $Estado = false;

  //Constructor
  public function __construct(string $BaseDatos)
  {
    //Damos valores
    $this->BaseDatos = $BaseDatos;
  }

  //Conexión
  public function conectar()
  { //Creamos conexión
    try {


      //Conexión ((servidor, BD),usuario, contraseña )
      $this->Conexión = new PDO("mysql:host=$this->Servidor;dbname=$this->BaseDatos", $this->Usuario, $this->Password);
      //Obtener acceso a los errores
      $this->Conexión->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //Actualizamos estado
      $this->Estado = true;
      //Retornamos
      return true;


      //Error en la conexión
    } catch (PDOException $err) {
      //Actualizamos estado
      $this->Estado = false;
      //Retornamos
      echo " ERROR AL CONECTAR A MYSQL, err ->" . $err;
      return false;
      //Error desconocido
    } catch (\Throwable $th) {
      //Actualizamos estado
      $this->Estado = false;
      //Retornamos
      echo " ERROR DESCONOCIDO, err ->" . $th;
      return false;
    }
  }

  //Ejecutar sql insertar/eliminar/actualizar
  public function ejecutarSql($Sql)
  { //Ejecutamos
    //Si se creo la conexion
    if ($this->Estado) {
      try {
        //Env consulta
        $this->Conexión->exec($Sql);
        //Retornamos id del resultado
        return $this->Conexión->lastInsertId();

        //Error con la conexion
      } catch (PDOException $err) {
        //Actualizamos estado
        $this->Estado = false;
        //Retornamos
        echo " ERROR DE CONEXION, err ->" . $err;
        return null;
        //Error desconocido
      } catch (\Throwable $th) {
        //Actualizamos estado
        $this->Estado = false;
        //Retornamos
        echo " ERROR DESCONOCIDO, err ->" . $th;
        return null;
      }
    }
    //Si no, vacío
    return null;
  }

  //Consulta inf 
  public function consultarInf($Sql)
  { //Ejecutamos
    //Si se creo la conexion
    if ($this->Estado) {
      try {
        
        //Creamos una sentencia y preparamos
        $Sentencia = $this->Conexión->prepare($Sql);
        //Ejecutamos sentencia
        $Sentencia -> execute();
        //Retornamos inf
        return $Sentencia -> fetchAll();

        //Error con la conexion
      } catch (PDOException $err) {
        //Actualizamos estado
        $this->Estado = false;
        //Retornamos
        echo " ERROR DE CONEXION, err ->" . $err;
        return null;
        //Error desconocido
      } catch (\Throwable $th) {
        //Actualizamos estado
        $this->Estado = false;
        //Retornamos
        echo " ERROR DESCONOCIDO, err ->" . $th;
        return null;
      }
    }
    //Si no, vacío
    return null;
  }
}
