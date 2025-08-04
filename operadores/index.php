<?php

//Operador de asignacion = 
//Operador de asignacion por referencia = &

$a = 10;
$b = &$a; //cada vez que cambiemos el valor de a automaticamente detecatra el cambio sin necesidad de volver a poner de nuevo la asignacion

$a = 20;
$b = $a;

//Operador de asignacion para concatenar .=
$saludo  = "Hola ";
$saludo .= "Pendejos ";
$saludo .= "Soy la Ostia";

echo $b."<br>";
echo $saludo."<br>";

//Operadores Especiales
//Ternario
$promedio = 7;

$aprobo = ($promedio>=7)?"Aprobaste":"Reprobaste";

//Elvis ?:
$aprobotwo= ($promedio)?:5; //Si o si promedio debe de estar inicializado sino este dara error 
//Para solucionar esto se implemento fusion nulll?
$aprobothree = ($promedio)??5; //Arregla este error

echo $aprobo."<br>";
echo $aprobotwo."<br>";
echo $aprobothree."<br>";

?>