<?php

$conn = new PDO("mysql:dbname=estudoPHP;host=127.0.0.1", "estudoPHP", "123");

$stmt = $conn->prepare("SELECT * FROM tb_users ORDER BY id_user");
$stmt->execute();
$results = $stmt->fetch(PDO::FETCH_ASSOC);

foreach ($results as $row) {
  foreach ($row as $key => $value) {
    echo "<strong>".$key.": </strong>".$value."</br>";
  }

  echo "======================================= </br>";
}

//echo json_encode($results);
?>
