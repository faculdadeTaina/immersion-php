<?php
//false, null e empty
$funcionario1=null;
$funcionario2='';

if(is_null($funcionario1)){
  echo 'Sim, a variável é null';
}else{
  echo 'Não, a variável é null';
}

echo '<br/>';

if(is_null($funcionario2)){
  echo 'Sim, a variável é null';
}else{
  echo 'Não, a variável é null';
}

echo '<br/>';

if(empty($funcionario1)){
  echo 'Sim, a variável é vazia';
}else{
  echo 'Não, a variável é null';
}

echo '<br/>';

if(empty($funcionario2)){
  echo 'Sim, a variável é vazia';
}else{
  echo 'Não, a variável é null';
}

?>