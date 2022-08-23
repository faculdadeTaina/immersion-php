<?php

//encapsulamento

class Pai{
  private $nome='Jorge';
  protected $sobrenome='Silva';
  public $humor='Feliz';


}

$pai = new Pai();
echo $pai ->humor;

?>