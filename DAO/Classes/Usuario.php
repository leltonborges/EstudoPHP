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

    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_users WHERE id_user = :ID", array(":ID" => $id));
        if (count($result) > 0) {
            $row = $results[0];
            $this->setId_user($row['id_user']);
            $this->setName_user($row['nome_user']);
            $this->setLogin_user($row['login_user']);
            $this->setSenha_user($row['senha_user']);
            $this->setData_cad_user(new DateTime($row['data_cad_user']));
        }
    }

    public function __toString() {
        json_decode(array(
            'id_user' => $this->getId_user(),
            'name_user' => $this->getName_user(),
            'login_user' => $this->getLogin_user(),
            'senha_user' => $this->getSenha_user(),
            'Data_cad_user' => $this->getData_cad_user()->format("d/m/Y H:i:s")
        ));
    }

}

?>