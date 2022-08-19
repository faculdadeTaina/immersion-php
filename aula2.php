<?php
//gets e sets
class Funcionario{
  //atribustos
 public $nome=null;
  public $telefone=null;
  public $numFilhos=null;

  //setts
  function setNome($nome){  
    $this-> nome=$nome;
  }

    function setTelefone($telefone){
    $this-> telefone=$telefone;
  }

    function setNumFilhos($numFilhos){
    $this-> numFilhos=$numFilhos;
  }

  //getts 

function getNome(){
  return $this->nome;
}

  function gettelefone(){
  return $this->telefone;
}
  
  function getnumFilhos(){
  return $this->numFilhos;
}
  //métodos
  function resumirCAdFun(){
  
    return "$this->nome possui $this->numFilhos filho(s)";
    
  }

  function modificarNumFilhos($numFilhos){
 $this->numFilhos=$numFilhos;
    
  }

  
}

//instanciando
$y=new Funcionario();
$y->setNome('josé');
$y->setNumFilhos(4);
//$y->setTelefone(0000000);
echo $y->resumirCAdFun();

echo '<hr/>';

$m=new Funcionario();
$m->setNome('MAria');
$m->setNumFilhos(42);
//$y->setTelefone(0000000);
echo $m->resumirCAdFun();

?>
