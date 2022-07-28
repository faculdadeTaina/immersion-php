<html>
  <body>
 <?php 

$usuario_cartao=false;

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

  if($usuario_cartao==true){
    echo 'Sim';
  }else{
    echo 'Não';
  }
  ?>

<p>Valor da compra: <?= $valor_frete ?></p>
    <p>Recebeu o desconto no frete?</p>
    
    <?php 

  if($recebeu_desconto==true){
    echo 'Sim';
  }else{
    echo 'Não';
  }

  ?>

  </body>
</html>