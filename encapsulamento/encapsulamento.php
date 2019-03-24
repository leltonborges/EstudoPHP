<?php
class Pessoa{
  public $nome = "Raimundo";
  protected $idade = 28;
  private $senha = "123";

  public function getSenha(){
    return $this->senha;
  }

  public function verDados(){
    echo $this->nome."<br/>";
    echo $this->idade."<br/>";
    echo $this->senha;
  }
}

class Programandor extends Pessoa{
  public function verDados(){
    echo get_class($this)."<br/>";
    echo $this->nome."<br/>";
    echo $this->idade."<br/>";
    echo $this->getSenha();
    //echo $this->senha;
  }
}

$objt = new Programandor();

//echo $pessoa->senha."<br/>";
$objt->verDados();
 ?>
