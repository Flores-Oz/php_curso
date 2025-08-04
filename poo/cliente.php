<?php
require_once("persona.php");
require_once("empelado.php");
class Cliente extends Persona{
    public function __construct(
        public bool $esFrecuente =false, public string $correo= "",
    ){

    }

    function comer(){
        $this->setTelefono("1234567890");
        echo $this->getTelefono();
    }

    function saludar(Empelado $empleado){ 
        echo "Felicidades al Chef ",$empleado->nombre,"<br>";
    }


    //Pólimorfimso SobreEscritura de Funcionaes
    function hablar($tema) {
        echo "Hola mi tema es: ".$tema."<br>";
    }
}
?>