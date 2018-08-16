<?php

class Sanitize
{
    public function sanitize_input($inputData){
        $inputData = strip_tags($inputData); //loại bỏ thẻ html trong input
        return $inputData;
    }
    public function sanitize_password($password, &$errors){
        $errors_init = $errors;
        $password = strip_tags($password);
        if(strlen($password) < 8){
            $errors[] = "Password must be greater than 8 characters";
        }
        if (!preg_match("#[0-9]+#", $password)) {
            $errors[] = "Password must include at least one number!";
        }
        if (!preg_match("#[a-zA-Z]+#", $password)) {
            $errors[] = "Password must include at least one letter!";
        }
        if($errors !== null) {
            return ($errors == $errors_init);
        }else{
            return $password;
        }
    }
}