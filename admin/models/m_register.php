<?php
require_once("database.php");
class M_register extends database{

    public function validateEmail($email){
        $sql = "SELECT email FROM users WHERE email=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }
    public function crypt_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }
    private function addUser($full_name, $email, $password){
        //crypt password
        $password = $this->crypt_password($password);
        //Insert
        $sql = "INSERT INTO users(full_name, email, password) VALUES ( ?, ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($full_name, $email, $password));
    }
    public function register($full_name, $email, $password){
        return $this->addUser($full_name, $email, $password);
    }
}
?>