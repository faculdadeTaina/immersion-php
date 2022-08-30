<?php
//tratamento de erro

try{
  //tente
  echo  "try";
  $slq='Select * from clientes';
  mysql_query($slq);
  
  
}catch(Error $e){
  echo "catch aqui é um erro";
  echo $e;
} finally{
  echo  "finally";
}
  

?>