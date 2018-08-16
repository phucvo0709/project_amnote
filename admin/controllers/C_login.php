<?php
class C_login
{
    public function show()
    {
        //Model
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Login";
        $view = "views/v_login.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout-auth.tpl");
    }
}