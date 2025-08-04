<?php
$nombre = "Hello Moto";
$edad = 10;
$promedio = 9.5;
$esAlumno = false;
$Nombew = "Oscar";
const frase = "Ser o No ser";

// Salida con salto de línea HTML
echo $nombre . " " . $edad . " " . $esAlumno . " " . $promedio . " " . $Nombew . " " . frase . "<br>";

// Conversiones de tipo
echo "Tipo de \$nombre: " . gettype($nombre) . "<br>";

$numeroOne = 20.5;
$numeroTwo = "10";

$suma = $numeroOne + $numeroTwo;

echo "Tipo de \$suma: " . gettype($suma) . "<br>";
echo "Convertido a string: " . gettype(strval($suma)) . "<br>";
echo "Convertido a entero: " . gettype(intval($suma)) . "<br>";

//Concatenacion
$palabra = "Ser o";
$palabraTwo = "No Ser";
$palabraThree = "es vivir o morir";

echo $palabra." ". $palabraTwo ."". "<br>"; 
echo "Ser o {$palabraTwo} esa es la cuestion<br>"; //Interpoalcion

//Comillas Dobles y Simples
$saludo = "hola";

echo "$saludo Oscar bienvenida" . "<br>"; //Si lo va a leer el interprete
echo '$saludo Oscar Bienvenido . "<br>"'; //Si no se muestra variable usar comillas simples para no tardar el interprete

//HereDoc y NowDoc
//HereDoc
echo nl2br(<<<Frase
$saludo
Ser, o no ser, ésa es la cuestión.
¿Cuál es más digna acción del ánimo,
sufrir los tiros penetrantes de la fortuna injusta,
u oponer los brazos a este torrente de calamidades,
y darlas fin con atrevida resistencia?
Morir es dormir. ¿No más?
¿Y por un sueño, diremos, las aflicciones se acabaron
y los dolores sin número,
patrimonio de nuestra débil naturaleza?...
Frase). "<br>";

//NowDoc
echo nl2br(<<<'Frase'
$saludo
Ser, o no ser, ésa es la cuestión.
¿Cuál es más digna acción del ánimo,
sufrir los tiros penetrantes de la fortuna injusta,
u oponer los brazos a este torrente de calamidades,
y darlas fin con atrevida resistencia?
Morir es dormir. ¿No más?
¿Y por un sueño, diremos, las aflicciones se acabaron
y los dolores sin número,
patrimonio de nuestra débil naturaleza?...
Frase). "<br>";

//Extraer y buscar palabras
$bienvenida = "Bienvenido al Mundo de la Programacion";
$palabra = "Programacion";

$buscar = strpos($bienvenida,$palabra); //Se busca la posicion de la palabra
$extraccuib = substr($bienvenida,$buscar); //Se extrae la palabra
echo $extraccuib."<br>";

//Reemplazar y formato v2
$RFC = "91 75 1A EC C7";
$buscar2 = " ";
$reemplazar = ":";

$resultado = str_replace($buscar2,$reemplazar,$RFC);
echo $resultado."<br>";

?>
