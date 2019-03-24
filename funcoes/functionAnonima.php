<?php
//Função anonimas pode ser criadas com uma função ou variavel
//e elas não possui retorno
//Processo lento pode ser uma conversão de video, no qual, não se sabe
//o tamanho e pode demora a conversão
//função com função anonima
function test($callback){
//Processo lento
$callback();

}

//Chamando uma funçao para chamar a função anonima
test(
  //Função anonima "sem nome"
  function (){
echo 'terminou';
  }
);
echo "<br>";
///////////////////////////////
//Função anonima com variaveis
$fn =
    //criando função anonima
    function($c){
    var_dump($c);
};

$fn("oi");
?>
