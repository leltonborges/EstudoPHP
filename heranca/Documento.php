<?php
class Documento{
  private $numero;

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero($n){
    $this->numero = $n;
  }
}
class CPF extends Documento{

  public function validar($cpf):bool{
    $cpfv =$cpf;
    return true;
  }
}
$doc = new CPF();
$doc->setNumero(12312312);
echo "<br";
echo $doc->getNumero();
 ?>
