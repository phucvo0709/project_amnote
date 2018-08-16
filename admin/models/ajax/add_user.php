<?php
include ("check_permission.php");
include ("./../m_register.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_register = new M_register();
$errors = null;
//sanitize data
$full_name = $sanitize->sanitize_input($_POST['full_name']);
$email = $sanitize->sanitize_input($_POST['email']);
$password = $sanitize->sanitize_password($_POST['password'], $errors);
$permission = $sanitize->sanitize_input($_POST['permission']);

if($errors){
    foreach($errors as $error){
        echo "<p class='text-danger mt-2'>$error</p>";
    }
}else{
    if($m_register->validateEmail($email)){
        echo "<p class='text-warning mt-2'>Email already exist</p>";
    }else{
        $register = $m_register->addUser($full_name, $email, $password, $permission);
        if(!$register){
            echo "<p class='text-danger mt-2'>Email already exist</p>";
        }else{
            echo "<script>location.reload();</script>";
        }
    }
}


