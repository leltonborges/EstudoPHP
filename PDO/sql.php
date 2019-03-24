<?php

$conn = new PDO("sqlsrv:Server=127.0.0.1;Database=estudo", "sa", "Lelton2019@");

$stmt =$conn->prepare("SELECT * FROM tb_usuarios order by id_user;");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results);
