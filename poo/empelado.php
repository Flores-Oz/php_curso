<?php
require_once("persona.php");
require_once("operaciones.php");
class Empelado extends Persona{
    use Operaciones;
    public function __construct(
        public string $cargo="", public string $horario= "",
    ){

    }

    function cocinar(){
        echo $this->validarRFC() ."<br>";
    }
}
?>