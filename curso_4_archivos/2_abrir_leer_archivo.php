<?php

  //Ruta
  $Ruta = "./ejemplo_leer_nota.txt";

  //Archivo
  $Archivo = $Ruta;

  //Abrimos archivo con opción de lectura -> r
  //fopen -> Abrir
  //fopen(Ruta,Tipo de acción lectura/r ,escritura/w, etc)
  $ArchivoAbierto = fopen($Archivo, "r");

  //Leemos el contenido del archivo
  //fread -> Leers
  //fread(Archivo, longitud/filesize(Archivo/Ruta))
  $ContenidoArchivo = fread($ArchivoAbierto,filesize($Archivo));

  //Mostramos contenido
  echo $ContenidoArchivo;