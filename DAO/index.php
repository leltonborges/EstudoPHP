<?php
include_once 'config.php';
$usuario = new Usuario();
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_users");
echo json_encode($usuarios);
 */ 

//busca por um unico ID
/*
$usuario = new Usuario();
$usuario->loadById(5);
echo $usuario;
 */

//$usarios = new Usuario();
//print_r($usarios->getList());
/*
$usuarios = Usuario::getList();
echo json_encode($usuarios);
 */

//busca por login no db
/*
$search = Usuario::search("le");
echo json_encode($search);
 */
/*
$usuario = new Usuario();
$usuario->login("leofsdfsd", "123");
echo $usuario;
 */
/*
$aluno = new Usuario("tes", "fbd32", "2wdfs");
$aluno->insert();
echo $aluno;
 */


//$usuario->loadById(2);
/*
$usuario->ultimoId();
$usuario->update("ANA", "ANINha", "annnna");
echo $usuario;
 */

$usuario->loadById(1);
$usuario->delete();
$usuario->getList();

echo $usuario;
?>