<?php
function teste(){

  //func_get_args permite passar ou não um argumento
  $estudo = func_get_args();

  return $estudo;
}

//sem paramento
var_dump(teste());

echo "<br>";
//Com parametro
var_dump(teste("lelton"));
 ?>
