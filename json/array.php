<?php
  $fruta = array("Laranja", "Manga", "Melancia");

  //Impremir o array
  //print_r($fruta);

  $carro[0][0]= "GM";
  $carro[0][1]= "Cobalt";
  $carro[0][2]= "Onix";
  $carro[0][3]= "Camaro";

  $carro[1][0]= "Fort";
  $carro[1][1]= "Fiesta";
  $carro[1][2]= "Fusion";
  $carro[1][3]= "Eco Sport";

  //echo $carro[0][3]."<br>";
  //o end tras o ultimo valor do array, desta posição
  //echo end($carro[1]);

  /////////////////////////////////////////////
  $pessoas = array();
  array_push($pessoas,
  array('Nome' => 'João',
        'Idade' => 19));

  array_push($pessoas,
  array('Nome' => 'Maria',
       'Idade' => 20));
  //print_r($pessoas);
  //print_r($pessoas[0]);
  print_r($pessoas[1]['Idade']);
 
 ?>