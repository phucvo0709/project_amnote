<?php
include('check_session.php');

class C_info_company
{
    public function show() {
        //Model
        include("models/m_info_company.php");
        $m_info_company = new M_info_company();
        $infos = $m_info_company->get_info_company();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Info Company";
        $view = "views/v_info_company.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("infos",$infos);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}