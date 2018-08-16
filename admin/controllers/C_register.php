<?php
class C_register
{
    public function show()
    {
        //Model
        include ("models/m_register.php");
        include ("sanitize.php");
        $sanitize = new Sanitize();
        $m_register = new M_register();
        $alert = null;
        $errors = null;
        if(isset($_POST['btn_register'])){
            $full_name = $sanitize->sanitize_input($_POST['full_name']);
            $email = $sanitize->sanitize_input($_POST['email']);
            $password = $sanitize->sanitize_password($_POST['password'], $errors);
            if($errors === null){
                if($m_register->validateEmail($email)){
                    $alert = "<p class='text-warning mt-2'>Email already exist</p>";
                }else{
                    $register = $m_register->register($full_name, $email, $password);
                    if(!$register){
                        $alert = "<p class='text-danger mt-2'>Email already exist</p>";
                    }else{
                        $alert = "<p class='text-success mt-2'>Register Success <a href='login'>Login</a></p>";
                    }
                }
            }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Register";
        $view = "views/v_register.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("alert",$alert);
        $smarty->assign("errors", $errors);
        $smarty->assign("view",$view);
        $smarty->display("layout-auth.tpl");
    }
}