<?php
include('check_session.php');

class C_accounting_firm
{
    public function show() {
        //Model
        include("models/m_accounting_firm.php");
        $m_accounting_firm = new M_accounting_firm();
        $firms = $m_accounting_firm->get_all_firm();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Accounting Firm";
        $view = "views/v_accounting_firm.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("firms",$firms);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}