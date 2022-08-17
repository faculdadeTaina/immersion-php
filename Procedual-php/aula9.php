<html>
  <body>
<?php
//funções
function exibirBoasVindas(){
  echo "Bem-vindo ao curso de PHP";

}
exibirBoasVindas();
//exibirBoasVindas();
//exibirBoasVindas();

//function
function calcularAreaTerrerno($largura, $comprimento){
  $area=$largura * $comprimento;
  //return $largura * $comprimento;
  return $area;
}

echo '<br/>';
echo calcularAreaTerrerno(3,5);

?>
  </body>
</html>