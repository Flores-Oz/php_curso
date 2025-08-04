<?php
  require_once("autoCarga.php");
 (new autoCarga)->cargarRutas();
  $cliente = new Cliente( );
  $cliente->nombre="Jose";
  $empleador = new Empelado( );
  $empleador->nombre= "Juan";
  echo $cliente->nombre."<br>";
  echo $cliente->comer()."<br>";
  echo $cliente->saludar($empleador);
  echo $cliente->hablar("Musica");

  $claseAnonima = new class{
    public $nombre;
    function suma(){
      echo 10+20;
    }
  };

  $claseAnonima->suma()."<br>";
?>