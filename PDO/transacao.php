<?php
$conn = new PDO("sqlsrv:Server=127.0.0.1;Database=estudo", "sa", "Lelton2019@");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_user= ?");
$id = 3;
$stmt->execute(array($id));
$conn->commit(); 
//$conn->beginTransaction();
