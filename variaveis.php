<?php
//Variaveis compostas
//Array
/*
$frutas = array("Manga","Cajú","Maracuja","Melancia");
//Object
$data = new DateTime();

//Detalha a variavel
var_dump($data);
echo"<br/>";
echo"<br/>";
//resource
$arquivo = fopen("variaveis.php", "r");
var_dump($arquivo);
//NULL
$nulo = NULL;

////////////////////////////////////////////////////////
//ESTUDO DE _GET
//sem conversão
$nome = $_GET["a"];
var_dump($nome);
//com conversão
$int = (int)$_GET['b'];
var_dump($int);
*/
//////////////////////////////////////////////////
//pegando o ip de provedor de acesso do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo '$ip <br/>';

//mostra o local do arquivo
$pagina = $_SERVER["SCRIPT_NAME"];
echo $pagina;
