<?php
include('check_session.php');

class C_favicon_company
{
    public function show() {
        //Model
        include("models/m_favicon_company.php");
        $m_favicon_company = new M_favicon_company();
        $favicons = $m_favicon_company->get_favicon_company();
        $favicon = $favicons->favicon;
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Favicon Company";
        $view = "views/v_favicon_company.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("favicon",$favicon);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}