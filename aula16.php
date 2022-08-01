<?php

//manipulaçaõ de array
//é ou não um array
//$array ='String';
/*$array =array('String', 'Atring2');

$retorno=is_array($array);

if($retorno){
  echo 'Sim, é um array';
}else{
   echo 'Não, não é um array';
}*/
//retorna todas as chaves de um array
/*$array=[1=>'a', 7=>'b',18=>'c'];
echo '<pre>';
print_r($array);
echo '</pre>';

echo '<br/>';
//os indices
$chaves=array_keys($array);
echo '<pre>';
print_r($chaves);
echo '</pre>';*/
//ordena o array e reajusta os indices
/*$array =array('mouse', 'cabo hdmi', 'notebook', 'teclado');

echo '<pre>';
print_r($array);
echo '</pre>';

sort($array); //true ou false
echo '<pre>';
print_r($array);
echo '</pre>';
*/
//ordena em ordem alfabetica
/*$array =array('mouse', 'cabo hdmi', 'notebook', 'teclado');

echo '<pre>';
  print_r($array);
echo '</pre>';

asort($array); //true ou false
echo '<pre>';
  print_r($array);
echo '</pre>';
*/

//conta a quantidade de elementos
/*$array =array('mouse', 'cabo hdmi', 'notebook', 'teclado');

echo '<pre>';
print_r($array);
echo '</pre>';


echo '<pre>';

print_r($array);
echo count($array); 
echo '</pre>';*/

//junta array
$array1=['osx', 'windows'];
$array2=array('linux');
$array3=['Solaris'];

$novo_array=array_merge($array1,$array2);

echo '<pre>';

print_r($novo_array);
//echo ($novo_array); 
echo '</pre>';

?>