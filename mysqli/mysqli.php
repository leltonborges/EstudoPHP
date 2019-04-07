<?php
$conn = new mysqli("127.0.0.1","estudoPHP", "123", "estudoPHP");
if ($conn->connect_error){
    echo "Error: ". $conn->connect_error;
}
$stmt = $conn->prepare("INSERT INTO tb_users(nome_user, login_user, senha_user)
                        values(?,?,?)");
$nome = "lelton";
$login = "leo";
$senha = "123";
$stmt->bind_param("sss", $nome,$login,$senha);
$stmt->execute();
?>
