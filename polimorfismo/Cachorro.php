<?php

class Cachorro extends Animal{
  public function emiterSom() {
      return "late";
  }
}
$plut = new Cachorro();
  echo $plut->emiterSom();
  echo $plut->andar();
 ?>
