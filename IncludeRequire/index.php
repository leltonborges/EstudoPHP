<?php
//exemplo do include e require
//include 'include_require.php'; ou require 'include_require.php';
//exemplo
//include 'include_require.php';

//exite o include_once e require_once
//essas duas funcionalidade chamada a funcão uma unica vez, se for chamada novamente
//é ignorando para não da erro de dupicidade e as mesmas exige que o arquivo chamado
//esteja funcionando correntamente.
//exemplo
include_once 'include_require.php';
$resultado = soma(10, 20);
echo $resultado;
?>

