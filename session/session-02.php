<?php
//para restaurar uma variavel de sessão basta descobrir e iniciar manualmente,
///"retire o session_regenerate_id();" se estiver iniciada
session_id('a8g1n56lq7otqr17n5nurt4no11');
require_once ("config.php");

//apaga as variaveis de sessão
//SESSION_UNSET();

echo $_SESSION['nome']."<br>";

//o id da sessão
echo session_id();

//cria um novo id
//session_regenerate_id();
//echo session_regenerate_id();
echo "<br>";

//////////////////////////////////////
//mostrar onde estar guardado os dados da sessão
echo session_save_path();
?>
