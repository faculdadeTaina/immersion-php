<?php

//encapsulamento

class Pai{
  private $nome='Jorge';
  protected $sobrenome='Silva';
  public $humor='Feliz';

  public function getSobrenome(){
    return $this->sobrenome;
  }

   public function setSobrenome(){
    if(strlen($value)>=3){
      $this->sobrenome=$value;
    }
  }

}

/*$pai = new Pai();
echo $pai ->humor;
$pai ->humor='Triste';
echo '<br/>';
echo $pai ->humor;*/
$pai = new Pai();

echo $pai ->getSobrenome();

$pai->setSobrenome('Oliveira');

echo '<br/>';

echo $pai->getSobrenome();

?>
