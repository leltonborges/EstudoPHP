<?php
echo date("d:m:Y H:i:s");

echo "<br>";
//a função time() começã a contagem de 1970 ate atualmente, quando foi
//criado o calendario gregoriano no formato UTC
echo time();

echo "<br> ============================================<br>";
//converte string para o timesTemp

//qual é o timesTemp da data
echo strtotime("1998-12-02");
$tt= strtotime("1998-12-02");

//strtotime aceita expressão
echo "<br> ============================================<br>";
$now =  strtotime("now"); //agora
echo date("l, d:m:Y",$now);
echo "<br>";
$day =  strtotime("+1 day");
echo date("l, d:m:Y",$day)." -> dia seguinte";//dia seguinte
echo "<br>";
$week=  strtotime("+1 week");
echo date("l, d:m:Y",$week)." -> semana seguinte";//proxima semana

echo "<br> ============================================<br>";

//convertendo data em timesTemp
echo date("d:m:Y l", $tt);
 ?>
