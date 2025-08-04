<?php
   //Foreach
   $array = ["Marines","Jose","Sofia"];
   $nombre = "Marines";
   echo $array[2]."<br>";
   echo $array[1]."<br>";
   foreach ($array as $nombre) {
    echo "Mi nombre es: ",$nombre."<br>";
   }

   //Datos por Index
   $datos = [
    "nombre"=>"Martines",
    "apelldio"=>"Hernandez",
    "edad"=>"29"
   ];

   foreach ($datos as $key => $value) {
    echo "$key: $value"."<br>";
   }
   //$arrary_push para integrar un nuevo dato
   //unset para quitar debe indicarse el index [#]
   //$variable[# o clave] = "lo nuevo"
   //asort arsort ordenar descendente o ascendentemente
   //array search para bscar en un arreglo
   //arrray_replace para corregir un array

   //Array Multidimensionales
   $animales = [
    "Felinos" => ["Puma","Jaguar","Lince"],
    "Aves"=> ["Paloma","Pato","Tucan"],
    "Reptiles"=> ["Serpiente","Cocodrilo","Tortuga"]
   ];

   foreach ($animales as $key => $clasificacion) {
    foreach ($clasificacion as $animal) {
        echo "$key: $animal"."<br>";
    }
   }

?>