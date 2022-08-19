<?php

//abstração

//definino modelo
class Funcionario{
  //atribustos
 public $nome=null;
  public $telefone=null;
  public $numFilhos=null;
  
public $nome1='José';
  public $telefone1=00000000;
  public $numFilhos2=2;
  //métodos
  function resumirCAdFun(){
    //return 'Este é um resumo cadastro';
    return "$this->nome1 possui $this->numFilhos2 filho(s)";
    
  }

  function modificarNumFilhos($numFilhos2){
 
    $this->numFilhos2=numFilhos2;
    
  }

  
}

//instanciando

$yan=new Funcionario();
echo $yan->resumirCAdFun();

//atualizando informações
$yan->modificarNumFilhos(3);
echo $yan->resumirCAdFun();

$x= new Funcionario();
echo $x->resumirCAdFun();
?>
