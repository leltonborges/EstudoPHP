<?php
$qualASuaIdade = 07;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){
  echo "Criança";
}else if($qualASuaIdade < $idadeMaior){
  echo "Adolecente";
}else if ($qualASuaIdade < $idadeMelhor){
  echo "Adulto";
}else{
  echo "Idoso";
}

//Operador ternário do if e EventListener
echo "<br>";
echo($qualASuaIdade > $idadeMaior)?"Maior de idade":"Menor de idade";
 ?>
