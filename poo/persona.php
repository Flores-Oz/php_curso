<?php
   //Clase Persona
   abstract class Persona{
    //private $nombre; //Union de Tipos se podria poner string y int en el mismo constructor
    //private $apellido;
   // private $edad;
   // private $telefono;
    static $idioma; //variable de la clase

    //Constructor y Destructor
    //public function __construct(
    //*    string $nombre = "", string $apellido = "", int $edad = 0, string $telefono = ""
    //) {
      //  $this->nombre = $nombre;
       // $this->apellido = $apellido;
       // $this->edad = $edad;
       // $this->telefono = $telefono;
       // echo "Inicio del Objeto"."<br>";
   // }

   //Constructor V8
   public function __construct(
    public string|int $nombre="", 
    public string $apellido= "", public string $telefono= "", public int|float $edad= 0
   ) { 
               
    }

    public function __destruct() {
        echo "Fin del Objeto"."<br>";
    }

    //metodos de obtencion
    public function getTelefono() {
        return $this->telefono; 
    }

    public function setTelefono($telefono) {
        $this->telefono = $this->validarTelefono($telefono);
    }

    //tenerle get y set para todos
    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){   
        switch($name){
            case "telefono":
                return $this->$name = $this->validarTelefono( $value );
            default:
                return $this->$name = $value;
        }
    }

    function hablar($tema){
        echo "Soy ",$this->nombre ," y hablo de $tema",$this->temaEsExtenso($tema);
    }

    function ver(){

    }

    function cantar(){

    }

    private function temaEsExtenso ($tema){ 
        return ($tema== "Politica")?"Tema Extenso"."<br>":"Tema no Extenso"."<br>";
    }

    private function validarTelefono($telefono){    
        if(preg_match('/^[0-9]{10}$/',$telefono)){ //preg_match expresion que verifica que conincida con la expresion regular
            return $telefono;
        }else{
            return "estructura incorrecta";
        }
    }


   }
?>