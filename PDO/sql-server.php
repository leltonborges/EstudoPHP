<?php
$conn = new PDO("sqlsrv:Server=127.0.0.1;Database=estudo", "sa", "Lelton2019@");


 ///////////////////////////////////
$stmt = $conn->prepare("INSERT into tb_usuarios (email_user, login_user, senha_user) VALUES(:email, :login, :password)");
$email = "jose@gasgsdgas";
$login = "jose";
$password = "1234567890";

$stmt->bindParam(":email", $email);
$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $password);

$stmt->execute();
echo "Dados inseridos";
///////////////////////////////////////


////////////////////////////////
/*
$stmt = $conn->prepare("UPDATE tb_usuarios SET email_user=:email, login_user=:login,
         senha_user=:password WHERE id_user=:id");
 
$email = "nada@teste";
$login = "fsdfsd";
$password = "123456dfsdf0";
$id = 9;

$stmt->bindParam(':login', $login);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':id', $id);
$stmt->execute();
//var_dump($stmt->execute());
//var_dump($stmt);
echo "Dados atualizados";
*/

/////////////////////////////////////
/*
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_user=:id");
$id = 8;
$stmt->bindParam(':id', $id);
$stmt->execute();
echo "Dados excluidos";
 */

