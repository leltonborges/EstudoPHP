<?php
class Sqlas extends PDO {
  private $conn;

  public function __construct(){
      $this->conn = new PDO("mysql:host=127.0.0.1;dbname=estudoPHP","estudoPHP", "123");
  }
  
  private function setParams($statement, $parameters = array()){
    foreach ($parameters as $key => $value) {
      $this->setparam($statement, $key, $value);
    }
  }

  private function setparam($statement, $key, $value){
    $statement->bindParam($key, $value);
    var_dump($statement);
  }

  public function query($rawQuery, $params = array()){
    $stmt = $this->conn->prepare($rawQuery);
    $this->setParams($stmt,$params);
    $stmt->execute();
    return $stmt;
  }

  public function select($rowQuery, $params=array()):array{
    $stmt = $this->query($rowQuery, $params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
 ?>
