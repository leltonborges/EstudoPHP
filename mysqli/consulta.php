<?php
$conn = new mysqli("127.0.0.1","estudoPHP", "123", "estudoPHP");
if ($conn->connect_error){
    echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_users ORDER BY login_user;");

//while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

$data = array();
while ($row = $result->fetch_assoc()) {
  array_push($data, $row);
  //var_dump($row);
}
echo json_encode($data);
?>
