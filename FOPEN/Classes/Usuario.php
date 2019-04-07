<?php

class Usuario {

    private $id_user;
    private $name_user;
    private $login_user;
    private $senha_user;
    private $data_cad_user;

    public function getId_user() {
        return $this->id_user;
    }

    public function getName_user() {
        return $this->name_user;
    }

    public function getLogin_user() {
        return $this->login_user;
    }

    public function getSenha_user() {
        return $this->senha_user;
    }

    public function getData_cad_user() {
        return $this->data_cad_user;
    }

    public function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    public function setName_user($name_user) {
        $this->name_user = $name_user;
    }

    public function setLogin_user($login_user) {
        $this->login_user = $login_user;
    }

    public function setSenha_user($senha_user) {
        $this->senha_user = $senha_user;
    }

    public function setData_cad_user($data_cad_user) {
        $this->data_cad_user = $data_cad_user;
    }

    public function __construct($name = "", $login = "", $senha = "") {
        $this->setName_user($name);
        $this->setLogin_user($login);
        $this->setSenha_user($senha);
    }

    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_users WHERE id_user = :ID", array(":ID" => $id));
        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function setData($data) {

        $this->setId_user($data['id_user']);
        $this->setName_user($data['nome_user']);
        $this->setLogin_user($data['login_user']);
        $this->setSenha_user($data['senha_user']);
        $this->setData_cad_user(new DateTime($data['data_cad_user']));
    }

    public static function getList() {
        $sql = new Sql();
        return $sql->select("select * from tb_users");
    }
    
    public function ultimoId(){
        $sql = new Sql();
        $results = $sql->select("select * from tb_users order by id_user desc limit 1");
        if(isset($results[0])){
            $this->setData($results[0]);
        }
    }

    public function update($nome, $login, $senha) {
        $this->setName_user($nome);
        $this->setLogin_user($login);
        $this->setSenha_user($senha);
        $sql = new Sql();
        $sql->query("UPDATE tb_users SET nome_user=:NOME, login_user=:LOGIN, senha_user=:SENHA WHERE tb_users.id_user = :ID;", 
            array(
            ':NOME' => $this->getName_user(),
            ':LOGIN' => $this->getLogin_user(),
            ':SENHA' => $this->getSenha_user(),
            ':ID' => $this->getId_user()));
    }
    
    public function delete(){
        $sql = new Sql();
        $sql->query("DELETE FROM tb_users where id_user = :ID;",
                array(':ID' => $this->getId_user()));
        
        $this->setId_user(0);
        $this->setName_user("");
        $this->setLogin_user("");
        $this->setSenha_user("");
        $this->setData_cad_user(new DateTime());
    }

    public static function search($param) {
        $sql = new Sql();
        return $sql->select("select * from tb_users where login_user like :SEARCH", array(":SEARCH" => "%" . $param . "%"));
    }

    public function login($login, $passaword) {
        $sql = new Sql();
        $results = $sql->select("SELECT  * FROM tb_users WHERE login_user = :LOGIN and senha_user = :PASS", array(
            ':LOGIN' => $login,
            ':PASS' => $passaword));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function insert() {
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:NOME, :LOGIN, :PASS)", array(
            ':NOME' => $this->getName_user(),
            ':LOGIN' => $this->getLogin_user(),
            ':PASS' => $this->getSenha_user()));
        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public function __toString() {
        return json_encode(array(
            "id_user" => $this->getId_user(),
            "nome_user" => $this->getName_user(),
            "login_user" => $this->getLogin_user(),
            "senha_user" => $this->getSenha_user(),
            "data_cad_user" => $this->getData_cad_user()->format("d/m/Y H:i:s")
        ));
    }

}

?>