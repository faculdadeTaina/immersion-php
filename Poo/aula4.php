
 <?php 
//chando d forma internamente
class Funcionario{
  //atribustos
 public $nome=null;
  public $telefone=null;
  public $numFilhos=null;
public $carro=null;
  public $salario=null;

  //overloading
  function _set($atributo,$valor){
    $this->$atributo=$valor;
  }

  function _get($atributo){
    return $this->$atributo;
  }
  
  //métodos
  function resumirCAdFun(){
  
    return $this->_get('nome') . "possui" . $this->_get('numFilhos') ."filho(s)";
    
  }

  function modificarNumFilhos($numFilhos){
 $this->numFilhos=$numFilhos;
    
  }

  
}

//instanciando
$y=new Funcionario();
$y->_set('nome', 'pedro');
$y->_set('NumFilhos', 4);

//$y->setTelefone(0000000);
echo $y->_get('nome'). 'possui' .$y->_get('NumFilhos') .'Filhos';

  //resumirCAdFun();

echo '<hr/>';

$m=new Funcionario();
$m->_set('nome', 'maria');
$m->_set('NumFilhos', 4);

//$y->setTelefone(0000000);
echo $m->_get('nome'). 'possui' .$m->_get('NumFilhos') .'Filhos';

  ?>

