<?php 


function calculo($salario){
  //$imposto =0;
  
  if($salario <= 1903.98){
       return   $salario* (7.5/100);
        }else if($salario >= 1903.98 && $salario >= 2826.65){
      return    $salario *(15/100);
        
        }else if($salario >=2826.65  && $salario >= 3751.05){
     return     $salario * (22.5/100);
        }else if($salario >= 4664.68){
      return         $salario * (27.5/100);
        }else{
      //return   echo "Tem algum erro!";
        }
  
}

echo calculo(700);

?>