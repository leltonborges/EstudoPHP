<?php
$con = new PDO("mysql:host=localhost;dbname=estudoPHP", "estudoPHP", "123");

$stmt = $con->prepare("INSERT INTO tb_users(nome_user, login_user, senha_user)
                        values(?,?,?)");
$nome = "lelton";
$login = "leo";
$senha = "123";

$stmt->bindParam(1, $nome);
$stmt->bindParam(2,$login);
$stmt->bindParam(3,$senha);
//$stmt->execute();

  $data = $con->query('SELECT * FROM tb_users ORDER BY id_user');
  
    foreach($data as $row) {
        print_r($row); 
    }
