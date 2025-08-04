<?php
  //Match V8, solo devuelve cadenas de texto no puede ejecutar operaciones en el bloque de codigo aunque si es menos codigo, disponible en php 8
  $camisa = "Verde";
  echo match($camisa){
    "Gris" => "Encontre Camisa Gris",
    "Amarillo" => "Encontre Camisa Amarilla",
    "Rojo" => "Encontre Camisa Rojo",
    "Verde" => "Encontre Camisa Verde",
  };
?>