<?php
$file = fopen("login.txt", "a+");
fwrite($file, date("d-m-Y H:i:s"."\r\n"));
fclose($file);
echo "arquivo criado com sucesso";
