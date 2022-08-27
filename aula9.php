<?php

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

class Filho extends Pai{
  public function getAtributo($attr){
    return $this->$attr;
  }
}

$filho=new Filho();

echo '<pre>';
print_r($filho);
echo '</pre>';
echo $filho->getAtributo('humor');

?>
