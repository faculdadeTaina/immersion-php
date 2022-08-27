<?php 
//interface

/*interface EquipamentoEletronico{
  //metodos da interface
  public function ligar();
public function desligar();
  
}


//implementando na classe
class Geladeira implements EquipamentoEletronico{
  
  public function abriPort(){
    echo 'Abrir a porta';
  }
  
   public function ligar(){
      echo 'Ligar';
   }
  
public function desligar(){
   echo 'Desligar';
}
  
}

class TV implements EquipamentoEletronicoInterface{
   public function trocarCanal(){
    echo 'Trocar canal';
  }
    public function ligar(){
      echo 'Ligar';
   }
  
public function desligar(){
   echo 'Desligar';
}
  
}
//instanciando
$x=new Geladeira();
$y=new TV();
*/
//implemetando mais de uma interface
interface ManiferoInterface{
  public function respirar();
  
}

interface TerrestreInterface{
  public function andar();
  
}


//implementando a interface
class Humano implements ManiferoInterface,TerrestreInterface{
public function respirar(){
  echo 'Respirar';
}
   public function andar(){
     echo 'Andar';
   }
  
   
}



?>