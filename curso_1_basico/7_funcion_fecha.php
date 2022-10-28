<?php

//Ejemplo #1 
//Las funciones de flecha capturan las variables 
//por valor automáticamente

//n1
$y = 1;

$fn1 = fn ($x) => $x + $y;
//equivalente a usar $y por valor:
$fn2 = function ($x) use ($y) {
  return $x + $y;
};

var_export($fn1(3));


//Ejemplo #2 
//Las funciones de flecha capturan variables por
//valor automáticamente, incluso cuando están anidadas
$z = 1;
$fn = fn ($x) => fn ($y) => $x * $y + $z;
// salida 51
var_export($fn(5)(10));

/*
De manera similar a las funciones anónimas,  
la sintaxis de la función de la flecha permite 
firmas de funciones arbitrarias, incluyendo los 
tipos de parámetros y de retorno, valores por 
defecto, variadades, así como por referencia 
al pasar y al regresar. Todos los siguientes 
son ejemplos válidos de las funciones de las 
flechas:
*/
