<?php
//exercitando array

//criando um arraay assoiciativo

$funcionarios=array(
  array('nome'=>'Joao', 'salario'=>2500),
  array('nome'=>'Maria', 'salario'=>2500),
  array('nome'=>'Marcos', 'salario'=>2500),
);

/*echo '<pre>';
print_r($funcionarios);
echo '<pre/>';
*/

//recuperando o index
foreach($funcionarios as $idx => $nome_funcionario){
  
/*  echo "ID $idx - Nome: $nome_funcionario . <br/>";
  */
  
  print_r($nome_funcionario);
  
}

?>
