<?php
include('check_session.php');

class C_notice
{
    public function show() {
        //Model
        include("models/m_notice.php");
        $m_notice = new M_notice();
        $notices = $m_notice->get_all_notice();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Notices";
        $view = "views/v_notice.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("notices",$notices);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}