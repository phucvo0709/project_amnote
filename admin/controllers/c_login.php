<?php
session_start();
if (isset($_SESSION['id'])) {
    //If the user is not logged in, redirect the website to the login page
    header('Location: index');
    exit();
}

class C_login
{
    public function show()
    {
        //Model
        include("models/m_login.php");
        include ("sanitize.php");
        $m_login = new M_login();
        $sanitize = new Sanitize();
        $alert = null;
        $errors = null;
        if(isset($_POST['btn_login'])){
            $email = $_POST['email'];
            $password = $sanitize->sanitize_password($_POST['password'], $errors);
            if($errors == null){
                $user = $m_login->checkUser($email, $password);
                if(!$user){
                    $alert = "<p class='text-danger mt-2'>Incorrect account or password</p>";
                }else{
                    $_SESSION['id']= $user->id;
                    $_SESSION['full_name']= $user->full_name;
                    $_SESSION['email']= $user->email;
                    $_SESSION['permission'] = $user->permission;
                    header('Location: index');
                    exit();
                }
            }
        }

        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Login";
        $view = "views/v_login.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("alert",$alert);
        $smarty->assign("errors", $errors);
        $smarty->assign("view",$view);
        $smarty->display("layout-auth.tpl");
    }
}