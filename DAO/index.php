<?php
include_once 'config.php';
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_users");
echo json_encode($usuarios);
 */

$usuario = new Usuario();
$usuario->loadById(3);
echo $usuario;
?>