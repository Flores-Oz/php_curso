<?php
class Autocarga{
    private function cargarClase($clase){
        $ruta = str_replace("\\","/", $clase).".php";
        if(file_exists($ruta)){
            require_once($ruta);
        }
    }

    public function cargarRutas(){
        spl_autoload_register(array($this,"cargarClase"));
    }
}
?>