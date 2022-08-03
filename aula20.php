<?php

//percorrendo o array
/*$registros=array(
  'Titulo noticia 1',
  'Titulo noticia 2', 
  'Titulo noticia 3'
);*/
$registros=array(array('titulo 1'=> 'Titulo noticia 1','conteudo 1'),
  array('titulo 2'=> 'Titulo noticia 2','conteudo 2'),
  array('titulo 3'=> 'Titulo noticia 3','conteudo 2'));

$idx=0;

while($idx<3){
  
 echo $registros[$idx];
  
  echo '<hr/>';
  
  $idx++;
  
}


?>