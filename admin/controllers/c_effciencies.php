<?php
include('check_session.php');

class C_efficiencies
{
    public function show() {
        //Model
        include("models/m_efficiencies.php");
        $m_efficiencies = new M_efficiencies();
        $efficiencies = $m_efficiencies->get_all_efficienci();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Efficiencies";
        $view = "views/v_efficiencies.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("efficiencies",$efficiencies);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}