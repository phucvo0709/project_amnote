<?php
require_once("database.php");

class M_login extends database {
    public function checkUser($email, $password){
        $sql = "select * from users where email=? ";
        $this->setQuery($sql);
        $user = $this->loadRow(array($email));
        if($user){
            if(password_verify($password, $user->password)){
                return $user;
            }else{
                return false;
            }
        }
    }
}
