<?php
  $pessoas = array();
  array_push($pessoas,
  array('Nome' => 'João',
        'Idade' => 19));

  array_push($pessoas,
  array('Nome' => 'Maria',
       'Idade' => 20));

//json transfere informações no formato texto
//convertendo php em Json com o json_encode
//echo json_encode($pessoas);

//Convertendo json em php com o json_decode
$json ='[{"Nome":"Jo\u00e3o","Idade":19},{"Nome":"Maria","Idade":20}]';
$objct_json = json_decode($json, true);

var_dump($objct_json);
 ?>
