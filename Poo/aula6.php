<?php 
//herança
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
}


class Veiculos{
  public $placa=null;
  public $cor=null;
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

$carro=new Carro('1234','branco');
echo '</pre>';

echo '<br/>';
echo '<br/>';
$moto=new Moto('1333','preto');


//print_r($carro);
//print_r($moto);

$carro->AbriTetoSolar();
echo '<br/>';
echo '<br/>';
$carro->acelerar();
echo '<br/>';
echo '<br/>';
$carro->AbriTetoSolar();

?>
