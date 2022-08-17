<?php

//array de numero aleatorios
echo rand(0, 6);
//echo gettrandmax();

/*for($i=0; $i<=5; $i++){
//$array= rang(1,60);
  $i=array();
  echo $i;
}*/
$numeros=array();

while(count($numeros)<=5){
  $num=rand(1,60);
  if(!in_array($num, $numeros)){
    $numeros[]=$num;
    
  }
}
print_r($numeros);

?>
