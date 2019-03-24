<?php
  interface Veiculo{
    public function acelerar($acelerar);
    public function frenar($frear);
    public function trocarMarcha($trocarMarcha);
    public function velocida($velocida);
    public function combustivel($combustivel);
    public function motor($motor);
    }

class Automovel implements Veiculo{
  public function acelerar($acelerar){
    echo "Aceleração: ".$acelerar;
  }
  public function frenar($f){
    echo 'Frenagem d: '.$f;
  }
  public function trocarMarcha($tm){
    echo 'Trocou a marchar '.$tm;
  }
  public function velocida($velocida){
    echo 'A velocidade é: '.$velocida;
  }
  public function combustivel($combustivel){
    echo 'O combustivel está a: '.$combustivel;
  }
  public function motor($motor){
    echo 'motor de: '.$motor;
  }
}

$civic = new Automovel();
echo $civic->acelerar("4 m/s");
 ?>
