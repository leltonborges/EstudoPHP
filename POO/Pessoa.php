<?php
class Pessoa{

public $nome;

public function falar(){
  return "O meu nome é: ".$this->nome;
}
}

$Ana = new Pessoa();
$Ana->nome="Ana";

echo $Ana->falar();
 ?>
