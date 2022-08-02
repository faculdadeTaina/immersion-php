<?php

//while - repete com base em uma condição
$num=1;
/*echo 'Inicio do loop';

while($num <10){
  //repete
  //echo '$num <br/>';
  echo "$num <br/>";
  
  $num++; //criterio de parada
  
}

echo 'Fim do loop';
*/
echo 'Inicio do loop';

while($num <10){
  //repete
  //echo '$num <br/>';
 // echo "$num <br/>";
  
  $num++; //acrecenta
  if($num==2 || $num ==6){
     continue;
    
  }
 echo "$num <br/>";

  /*if($num >50){
    //criterio de parada
    break;
  }
  */
}

echo 'Fim do loop';
?>
