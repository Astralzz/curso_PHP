<?php

//Visibilidad
//private -> Solo e la clase
//protected -> Solo e la clase padre y las hijas
//public -> Donde quieras

//Clase abstracta
abstract class Vehículo
{
  //Variable constante
  private const TIPO = "Vehículo";
  //Variables publicas
  public string $Modelo;
  public int $Ruedas;
  //Variables protegidas
  protected string $Color;
  protected int $Puertas;
  //Variables privadas
  private string $Dueño;

  //Constructor
  function __construct(string $Modelo, int $Ruedas, string $Color, int $Puertas, string $Dueño)
  {
    $this->Modelo = $Modelo;
    $this->Ruedas = $Ruedas;
    $this->Color = $Color;
    $this->Puertas = $Puertas;
    $this->Dueño = $Dueño;
  }

  //Métodos get y set
  public function getDueño()
  {
    return $this->Dueño;
  }

  public function setDueño($Dueño)
  {
    $this->Dueño = $Dueño;
  }
  public function getTipo()
  {
    //Retornar const
    return self::TIPO;
  }
}


//Clase Camion
class Camion extends Vehículo
{

  //Variables
  private float $Precio;
  private bool $Seguro;

  //Constructor
  function __construct(
    string $Modelo,
    int $Ruedas,
    string $Color,
    int $Puertas,
    string $Dueño,
    float $Precio,
    bool $Seguro
  ) {
    //Constructor padre
    parent::__construct($Modelo, $Ruedas, $Color, $Puertas, $Dueño);
    //Damos valores
    $this->Precio = $Precio;
    $this->Seguro = $Seguro;
  }

  //Mostrar datos
  public function mostrar()
  {
    //Retornamos
    return $this->obtenerCadena();
  }

  //Función privada
  private function obtenerCadena()
  {
    //Cadena
    $Cadena = "DATOS DEL VEHÍCULO <br>";
    //Datos
    $Cadena .= "Modelo: " . $this->Modelo . "<br>";
    $Cadena .= "Ruedas: " . $this->Ruedas . "<br>";
    $Cadena .= "Color: " . $this->Color . "<br>";
    $Cadena .= "Puertas: " . $this->Puertas . "<br>";
    $Cadena .= "Dueño: " . $this->getDueño() . "<br>";
    $Cadena .= "Precio: " . $this->Precio . "<br>";
    $Cadena .= "Tipo: " . $this->getTipo() . "<br>";
    $Cadena .= "Seguro: " . ($this->isSeguro() ? "SI" : "NO") . "<br>";

    //Retornamos
    return $Cadena;
  }

  //Métodos get y set
  public function getPrecio()
  {
    return $this->Precio;
  }

  public function setPrecio($Precio)
  {
    $this->Dueño = $Precio;
  }
  public function isSeguro()
  {
    return $this->Seguro;
  }

  public function setSeguro($Seguro)
  {
    $this->Seguro = $Seguro;
  }
}


//Creamos objetos
//Variables
$Mod = "GH-83J";
$Rue = 16;
$Co = "Rojo";
$Puert = 2;
$Due = "Edain Jesus";
$Pre = 624456.34;
$Se = false;
//Objeto
$Rino = new Camion($Mod, $Rue, $Co, $Puert, $Due, $Pre, $Se);
echo "El dueño es " . $Rino->getDueño() . "<br>";
echo $Rino->mostrar();
