<html>
  <body>
<?php 

$usuario_cartao=true;

$valor_comprar=225;

$valor_frete=50;

$recebeu_desconto=false;

  
if($usuario_cartao==true && $valor_comprar >= 100){
  
  $valor_frete=0;
  $recebeu_desconto=true;
}
  
?>
<?php
//condiçaõ true:false
//$usuario_cartao ? 'sim':'não';
  
?>
  
<h1>Possui cartão da loja? <?= $usuario_cartao ?'Sim': 'não' ?></h1>
    
</body>
</html>