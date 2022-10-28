<?php
#IMPRIMIR TEXTOS

//Imprimir con echo
/*
- Muestra una o más cadenas separadas por comas

- No tiene un valor de retorno

- Ejemplo:
*/
echo "<h3>echo</h3>";
echo "HOLA", " CON ", " ECHO";
echo "<hr>";

//Imprimir print_r()
/*
- Muestra una representación más entendible de un solo valor cualquiera

- No solo acepta cadenas, también acepta arreglos y objetos formateándolos para ser visualizados 
de una forma más entendible

- Puede devolver su valor de salida como un valor de retorno si le pasa true como su segundo argumento

- Útil para la depuración
*/
print_r("<h3>print_r()</h3>");
print_r("Hola con print_r()");
print_r("<hr>");

//Imprimir con print()
/*
- Muestra solo una simple cadena

-Devuelve 1, por lo cual puede ser usada en una expresión

-Ejemplos:
*/
print("<h3>print()</h3>");
print("Hola con print()");
print("<hr>");

//Imprimir con var_dump()
/*
- Muestra una representación más entendible de un valor cualquiera o más separados por comas

- No solo acepta cadenas, también acepta arreglos y objetos formateándolos para ser visualizados 
de una forma más entendible

- Usa un formato diferente al anterior print_r(), por ejemplo, también muestra el tipo del valor

- Útil para la depuración

- No tiene un valor de retorno
*/
var_dump("<h3>var_dump()</h3>");
var_dump("Hola con var_dump()");
var_dump("<hr>");


//Imprimir con var_export()
/*
- Muestra una representación más entendible y ejecutable de un valor cualquiera

- No solo acepta cadenas, también acepta arreglos y objetos formateándolos para ser visualizados 
de una forma más entendible

- Usa un formato de salida diferente de var_dump() y print_r(), la salida es un código de PHP válido

- Útil para la depuración

- Puede devolver su valor de salida como un valor de retorno si le pasa true como su segundo argumento

- */
var_export("<h3>var_export()</h3>");
var_export("Hola con var_export()");
var_export("<hr>");

//-----------------------------
/*
NOTAS

- echo es mucho más rápido que print

- echo y print son constructores de lenguaje

- print_r() y var_dump() son funciones

- echo y print pueden recibir sus argumentos mediante paréntesis como 
una función echo("Hello", "world"); ó print("Hello World");

*/
