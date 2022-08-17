<?php

//funções especificas
$texto='Curso de php';
echo $texto;
echo '<hr/>';
//converte para minusculo
echo strtolower($texto);
echo '<hr/>';
//converte para maiusculo
echo strtoupper($texto);
echo '<hr/>';
//primeira mauscula
echo ucfirst($texto);
echo '<hr/>';
//contar letras
echo strlen($texto);
echo '<hr/>';
//substituir caractes
echo str_replace('php','javascript',$texto);
echo '<hr/>';

//echo substr($texto);
//echo '<hr/>';

?>