<?php
require_once("database.php");
include ("crypt_password.php");
class M_register extends database{

    public function validateEmail($email){
        $sql = "SELECT email FROM users WHERE email=?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }

    public function addUser($full_name, $email, $password){
        //crypt password
        $crypt = new Crypt();
        $password_hash = $crypt->crypt_password($password);
        //Insert
        $sql = "INSERT INTO users(full_name, email, password) VALUES ( ?, ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($full_name, $email, $password_hash));
    }
}
?>