<?php
//header("Refresh: 1");
$data = new DateTime();
echo $data->format("d/m/Y H:i:s");

echo '<br>';

$periodo = new DateInterval("P15D");//adicionando mais 15 dias
$data->add($periodo);
echo $data->format("d/m/Y H:i:s");
 ?>
