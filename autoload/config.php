<?php

//busca classes na mesma pasta
function __autoload($name) {
    require_once ("$name.php");
}

//busca por classes em outras pastas
function classesDiversas($nomeClass) {
    if (file_exists($nomeClass . ".php") === TRUE) {
        require_once ($nomeClass . ".php");
    }
}

spl_autoload_register("classesDiversas");
spl_autoload_register(function($nomeClass){
    
    //colocar o nome da pasta antes de chamar a varialvel criada na função
    if (file_exists("interface".DIRECTORY_SEPARATOR.$nomeClass . ".php") === TRUE) {
        require_once ("interface".DIRECTORY_SEPARATOR.$nomeClass . ".php");
    }
});
?>
