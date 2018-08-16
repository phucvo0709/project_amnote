<?php
class Crypt{
    public function crypt_password($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }
}