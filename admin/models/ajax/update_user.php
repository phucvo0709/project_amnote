<?php
include ("check_permission.php");
include ("./../m_users.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_users = new M_users();
$errors = null;
//sanitize data
$id = $_POST['id'];
$full_name = $sanitize->sanitize_input($_POST['full_name']);
$permission = $sanitize->sanitize_input($_POST['permission']);

if($_POST['password'] !== ''){
    $password = $sanitize->sanitize_password($_POST['password'], $errors);

    if($errors){
        foreach($errors as $error){
            echo "<p class='text-danger mt-2'>$error</p>";
        }
    }else{
        $update = $m_users->update_password($full_name, $password, $permission, $id);
        if($update){
            echo "<script>location.reload();</script>";
        }
    }
}else{
    $update = $m_users->update_user($full_name, $permission, $id);
    if($update){
        echo "<script>location.reload();</script>";
    }
}

