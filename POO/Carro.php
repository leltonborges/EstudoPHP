<?php
class Carro{

  private $modelo;
  private $ano;
  private $motor;
  private $cor;

  public function getModelo(){
    return $this->modelo;
  }

  public function setModelo($modelo){
    $this->modelo = $modelo;
  }

  public function getAno():int{
    return $this->ano;
  }

  public function setAno($ano){
    $this->ano = $ano;
  }

  public function getMotor(): float{
    return $this->motor;
  }

  public function setMotor($motor){
    $this->motor = $motor;
  }

  public function getCor(){
    return $this->cor;
  }

  public function setCor($cor){
    $this->cor = $cor;
  }

  public function exibir(){
    return array(
      "modelo" => $this->getModelo(),
      "ano" => $this->getAno(),
      "motor" => $this->getMotor(),
      "cor" => $this->getCor()
    );
  }
}

$gol = new Carro();
$gol->setAno(2017);
$gol->setMotor(1.6);
$gol->setModelo("Gol GT");
$gol->setCor("Blue");

var_dump($gol->exibir());
 ?>
