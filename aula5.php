<?php
//construtor e destrutor
class Pessoa{
  
  public $nome=null;

  //construtor 
  function __construct($nome){
    echo 'Objeto iniciado';
    $this->nome=$nome;
  }

  function __get($atributo){
    
  }

}

$pessoa=new Pessoa('Jorge');

?>
