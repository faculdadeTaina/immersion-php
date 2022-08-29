<?php
//namespace

//namespace com nome a
namespace A;

interface CadastroInterface{
  public function salvar();
}

class Cliente implements CadastroInterface{
  
  public $nome="Felipe";
  public function __get($attr){
    return $this->$attr;
    
  }
  public function salvar(){
    echo 'salvar';
  }
  
}

//namespace com nome b
namespace B;

interface CadastroInterface {
  public function remover();
}


class Cliente implements CadastroInterface{

  
  public $nome="Jorge";
  public function __get($attr){
    return $this->$attr;
    
  }
   public function remover(){
    echo 'remover';
  }
}

$c= new Cliente();
print_r($c);
echo $c->__get('nome');
?>
