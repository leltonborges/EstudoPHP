<?php
class Animal{
  public function emiterSom(){
    return "Som";
  }

  public function andar(){
    return "com quatro padas";
  }

  public function comer(){
    return "Carne";
  }
}

class Cachorro extends Animal{
}
$plut = new Cachorro();
  echo $plut->emiterSom()."<br/>";
  echo $plut->andar();
 ?>
