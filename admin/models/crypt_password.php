<?php
class Crypt{
    public function crypt_password($password){
        return password_hash($password, PASSWORD_DEFAULT);
//        print_r($password);
//        $hasformat= "$2y$10$";
//        $salt= "haimuoihaihaimuoihai22";
//        $has_and_salt= $hasformat.$salt;
//        return crypt($password,$has_and_salt);
    }
}