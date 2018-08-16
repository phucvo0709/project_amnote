<?php
include('check_session.php');

class C_users
{
    public function show() {
        //Model
        include("models/m_users.php");
        $m_users = new M_users();
        $users = $m_users->get_all_user();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Users";
        $view = "views/v_users.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("users",$users);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}