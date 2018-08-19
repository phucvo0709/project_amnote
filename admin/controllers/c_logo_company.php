<?php
include('check_session.php');

class C_logo_company
{
    public function show() {
        //Model
        include("models/m_logo_company.php");
        $m_logo_company = new M_logo_company();
        $logos = $m_logo_company->get_logo_company();
        $logo = $logos->logo;
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Logo Company";
        $view = "views/v_logo_company.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("logo",$logo);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}