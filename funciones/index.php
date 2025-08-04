<?php
   //Funciones
   declare(strict_types=1); //Que respete estrictamente los tipos
   function obtenerEdad(int $year, int $yearA=2025){
     $edad = $yearA-$year;
     return $edad;
   }

   $edad = obtenerEdad(2000,2010);
   echo "La edad es: $edad"."<br>";

   //Funciones Anonimas
   $mensaje = "La suma es ";

    $suma = function($numeroOne, $numeroTwo) use($mensaje){
        $resultado = $numeroOne + $numeroTwo;
        return $mensaje . $resultado; // ← aquí va el punto
    };

    echo $suma(100, 400) . "<br>";
?>