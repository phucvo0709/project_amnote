<?php

class C_notice
{
    public function show()
    {
        //Model
        include("models/m_notice.php");
        $m_notice = new M_notice();
        $notices = $m_notice->get_all_notice();
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "Notice";
        $view = "views/v_notice.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign("notices",$notices);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}