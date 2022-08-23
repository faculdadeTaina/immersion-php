<?php

//polimofismo - sobrescrita de metodos

class Carro extends Veiculos{

  public $teto_solar=true;

  function __constructor($placa, $cor){
    $this->placa=$placa;
    $this->cor=$cor;
  }
 
  function AbriTetoSolar(){
    echo 'Abrir teto solar';
  }
  function  alterarPosicaoVolante(){
    echo 'Alterar volante';
  }
}


class Moto extends Veiculos{

  public $contraPEso=true;

 function __constructor($placa, $cor){
    $this->placa=$placa;
    $this->cor=$cor;
  }
  function empinhar(){
echo 'Empinar';
  }
  function trocarMarchar(){
    echo 'Desengatar a empreegame com amao ';
  }
}


class Veiculos{
  public $placa=null;
  public $cor=null;


  function trocarMarchar(){
    echo 'Desengatar ';
  }
  
  function freias(){
    echo 'Freiar';
  }
  
  function __constructor($placa, $cor){
    $this->placa=$placa;
    $this->cor=$cor;
  }
   function acelerar(){
echo 'acelear';
     
  }
    function freiar(){
echo 'freiar';
     
  }
}
echo '<pre>';

$carro=new Carro();
$moto=new Moto();

echo '<br/>';
//$moto=new Moto('1333','preto');


//print_r($carro);
//print_r($moto);

$carro->trocarMarchar();
echo '<br/>';
//$carro->acelerar();
$moto->trocarMarchar();
echo '<br/>';
//$carro->AbriTetoSolar();

?>
