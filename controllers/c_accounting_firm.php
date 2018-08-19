<?php
/**
 * Created by PhpStorm.
 * User: Phuc Vo
 * Date: 8/15/2018
 * Time: 8:35 PM
 */

class C_accounting_firm
{
    public function show()
    {
        //Model
        include("models/m_accounting_firm.php");
        $m_accounting_firm = new M_accounting_firm();
        $accounting_firms = $m_accounting_firm->get_all_accounting_firm();
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "AMNOTE – for accounting firm";
        $view = "views/v_accounting_firm.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign("accounting_firms",$accounting_firms);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}