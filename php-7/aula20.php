<?php

//percorrendo o array
/*$registros=array(
  'Titulo noticia 1',
  'Titulo noticia 2', 
  'Titulo noticia 3'
);*/
$registros=array(
  array('titulo'=> 'Titulo noticia 1','conteudo' =>'Conteudo 1'),
  array('titulo'=> 'Titulo noticia 2','conteudo' =>'Conteudo 2'),
  array('titulo'=> 'Titulo noticia 3','conteudo' =>'Conteudo 3')
);

//$idx=0;

/*while($idx<3){
  
 echo '<h3>' . $registros[$idx]['titulo'] .'</h3>';
   echo '<p>' . $registros[$idx]['conteudo'] .'</p>';
  echo '<hr/>';
  
  $idx++;
  
}
*/
/*do{
   echo '<h3>' . $registros[$idx]['titulo'] .'</h3>';
  
   echo '<p>' . $registros[$idx]['conteudo'] .'</p>';
  
  echo '<hr/>';
  
   $idx++;
}while($idx< $registros);
*/

for($idx=0;$idx< $registros;$idx++){
  echo '<h3>' . $registros[$idx]['titulo'] .'</h3>';
  
   echo '<p>' . $registros[$idx]['conteudo'] .'</p>';
  
  echo '<hr/>';
}

?>