<?php
class Endereco{

  private $logradouro;
  private $numero;
  private $complemento;
  private $cidade;
  private $estado;
  private $bairro;

  public function __construct($logradouro, $numero, $complemento, $cidade, $estado, $bairro){
    $this->logradouro =$logradouro;
    $this->numero = $numero;
    $this->complemento = $complemento;
    $this->cidade = $cidade;
    $this->estado = $estado;
    $this->bairro = $bairro;
  }

  public function __destruct(){
    //var_dump("DESTRUIR");
  }

  public function __toString(){
    return $this->logradouro.", ".$this->numero.", - ".$this->complemento.", ".$this->cidade
    .", ".$this->estado.", ".$this->bairro;
  }
}

$newEndereco = new Endereco("Rua do sena",45,"s/c","Redenção","Piuai","s/b");

//para chamar o toString basta da um "echo" na variavel
echo $newEndereco;

//var_dump($newEndereco);
//echo '<br>';
//unset($newEndereco);
 ?>
