<?php
//pesquisa em array

$lista_frutas=['Banana','Maça','Morango','Uva'];

echo '<pre>';

print_r($lista_frutas);
echo '</pre>';
//in_array()
//retorna true ou false se esta ou n no array

echo in_array('Maça', $lista_frutas);

//array_search()
//retorna o valor do indice caso exista

echo array_search('Uva', $lista_frutas);


?>
