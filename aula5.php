<?php
//construtor e destrutor
class Pessoa{
  
  public $nome=null;

  //construtor 
  function __construct($nome){
    //echo 'Objeto iniciado';
    $this->nome=$nome;
  }

  function __destructor(){
    echo 'objeto removido';
  }

  function __get($atributo){
    return $this-> $atributo;
    
  }

}

$pessoa=new Pessoa('Jorge');
echo $pessoa -> __get('nome');

unset($pessoa);

?>
