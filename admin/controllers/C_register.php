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
        $alert = '';
        if(isset($_POST['btn_register'])){
            $full_name = $sanitize->sanitize_input($_POST['full_name']);
            $email = $sanitize->sanitize_input($_POST['email']);
            $password = $sanitize->sanitize_input($_POST['password']);
            if($m_register->validateEmail($email)){
                $alert = 'Email already exist';
            }else{
                $register = $m_register->register($full_name, $email, $password);
                if(!$register){
                    $alert = 'Email already exist';
                }else{
                    $alert = 'Register success';
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
        $smarty->assign("view",$view);
        $smarty->display("layout-auth.tpl");
    }
}