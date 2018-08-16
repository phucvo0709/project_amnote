<?php
require_once("database.php");
include ("crypt_password.php");

class M_users extends database
{
    public function get_all_user(){
        $sql = "SELECT * FROM users ORDER BY permission DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_user($full_name, $permission, $id){
        $sql = "UPDATE users SET full_name=?, permission=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($full_name, $permission, $id));
    }
    function update_password($full_name, $password, $permission, $id){
        $crypt = new Crypt();
        $password_hash = $crypt->crypt_password($password);
        $sql = "UPDATE users SET full_name=?, password=?, permission=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($full_name, $password_hash, $permission, $id));
    }
    function delete_user($id){
        $sql = "DELETE FROM users WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}