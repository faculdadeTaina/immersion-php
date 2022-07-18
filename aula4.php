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
  <h1>Detalhes do pedido</h1>
  <p>Possui cartão da loja?</p>

  <?php 

  
  ?>
  </body>
</html>