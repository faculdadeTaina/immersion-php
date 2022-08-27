<?php
//atributos e metodos estaticos

class Exemplo {
  //não esta acessivel ao operador
  public  static $atributo1="Estou um atributo estatico";

   public $atributo2="Estou um atributo normal";

  public static function metodo1(){
    echo 'Eu sou metodo estatico';
  }

  public function metodo2(){
     echo 'Eu sou metodo normal';
  }
  
  
}

//criando uma estancia estatica
//$X=new Exemplo();
/*echo Exemplo::$atributo1;

echo '<br/>';

Exemplo::metodo1();
*/


//criando uma estancia normal
//não é possivel acessar

//echo Exemplo::$atributo2;

echo '<br/>';

echo Exemplo::metodo2();

?>
