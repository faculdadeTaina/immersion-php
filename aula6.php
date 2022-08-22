<?php 
//herança
class Carro extends Veiculos{

  public $teto_solar=true;

 
  function AbriTetoSolar(){
    echo 'Abrir teto solar';
  }
  function  alterarPosicaoVolante(){
    echo 'Alterar volante';
  }
}


class Moto extends Veiculos{

  public $contraPEso=true;

 
  function empinhar(){
echo 'Empinar';
  }
}


class Veiculos{
  public $placa=null;
  public $cor=null;
  
   function acelerar(){
echo 'acelear';
     
  }
}

$carro=new Carro();
$moto=new Moto();



print_r($carro);
print_r($moto);

?>
