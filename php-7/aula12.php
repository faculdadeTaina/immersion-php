<?php
//manipula datas
//data aual
echo date('d');

echo '<br/>';
//dia atual
echo date('D');
echo '<br/>';
//ano/mes/ano atual
echo date('d/m/Y');
echo '<br/>';


//quantos dias tem entre essa data

$data_inicial='2018-04-24';
$data_final='2022-05-15';
//descobrir o timestamp
$timeI= strtotime($data_inicial);
echo $data_inicial .'-'.$timeI;

$timeF= strtotime($data_inicial);
echo $data_final .'-'.$timeF;

$diferenca_t=$timeF-$timeI;
echo $diferenca_t;

?>

