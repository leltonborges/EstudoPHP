<?php
$condição = true;

while ($condição){
    //$numero = rand(1, 10);
    $numero = 4;

    if($numero === 4){
      //  echo "Quatro!!!!!";
        $condição = FALSE;
    }
    //echo $numero."<br>";

////////////////////////////////////////
//DO while
$total = 150;
$desconto = 0.9;

do {
  $total *= $desconto;
} while ($total < 100);
echo "Total: ".$total;

}
