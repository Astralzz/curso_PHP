<?php
//CREAR O ESCRIBIR EN UN ARCHIVO

//ARCHIVO

//Nombre para el nuevo archivo
$NombreArchivo = "Archivo Creado.txt";
//Obtenemos un archivo existente
$ArchivoExistente = "./ejemplo_escribir_nota.txt";

//CONTENIDO

//Ponemos datos para agregar a los archivos
$DatosArchivoNuevo = "HOLA, este archivo se creo desde cero XD";
$DatosArchivoExistente = "HOLA, este archivo ya existía pero le agregue esto jeje XD";

//ABRIR EN ESCRITURA

//Abrimos los archivos con opción de escritura -> w
//fopen -> Abrir
//fopen(Ruta,Tipo de acción lectura/r ,escritura/w, etc)
$ArchivoCrear = fopen($NombreArchivo, "w");
$ArchivoAbierto = fopen($ArchivoExistente, "w");

//ESCRIBIMOS EN LOS ARCHIVOS
fwrite($ArchivoCrear, $DatosArchivoNuevo);
fwrite($ArchivoAbierto, $DatosArchivoExistente);

//CERRAMOS ARCHIVOS
//Importante !! Cerramos los archivos
fclose($ArchivoCrear);
fclose($ArchivoAbierto);
