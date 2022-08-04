<?php 
//foreat
//funciona melhor em array e objetos
$itens=array('sopa', 'cadeira', 'fogão', 'geladeira','mesa');

/*echo '<pre>';
print_r($itens);
echo '</pre>';
*/
//parametro
foreach($itens as $item){
 // echo "$item <br/>";
  echo "$item";
  //condições
  if($item=='mesa'){
    echo 'Compre uma mesa';
  }
  echo '<br/>';
}


?>