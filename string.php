<?php
$nome = "lelton pereira borges";
//colocando tudo em maiusculo
echo strtoupper($nome);
echo "<br/>";

//colocando em minusculas
$nome1 = "SFSDFSGGDFHDHFD";
echo strtolower($nome1);
echo "<br/>";

//colocando a primeira letra de cada palavra maiuscula
echo ucwords($nome);
echo "<br>";

//colocando so a primeira letra do primeiro nome maiuscula
echo ucfirst($nome);
echo "<br>";

//trocando dados da string
$teste = "mahga";
$troca = str_replace("h", "n", $teste); //1º o que trocar, 2º pra o que, 3º em quem?
echo $troca;
echo "<br/>";

//Buscando palavra ou letra no texto com string
$frase ="Amanhã eu irei na casa da minha tia e a repetição é a mãe da retenção";
$palavra = "tia";
$busca = strpos($frase, $palavra); //1º onde vai busca, 2º o que?
var_dump($busca);
echo "<br>";

//pegando o texto até determinada posição
$text = substr($frase, 0, $busca);//1º onde, 2º de onde inicia, 3º até aonde?
var_dump($text);
echo "<br>";

//pegando de determinada posição
//strlen é usanda para contra quantos caracter tem uma palavra ou determinado texto
$text2 = substr($frase, $busca + strlen($palavra), strlen($frase));
//neste caso não mostrar a palavra buscada porque fez a adicão "$busca + strlen($palavra)" para começa depois da palavra buscada
var_dump($text2);

?>
