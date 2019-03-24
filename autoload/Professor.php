<?php
include_once 'config.php';
//include_once 'informacao.php';

abstract class Professor extends Aula implements informacao {
    public function aulas(){
        echo 'teste';
    }
    public function formacaoAcademica($formacao){
        return $formacao;
    }
    public function horario($hora){
        return $hora;
    }
}

?>
