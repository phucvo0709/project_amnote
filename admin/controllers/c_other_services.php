<?php
include('check_session.php');

class C_other_services
{
    public function show() {
        //Model
        include("models/m_other_services.php");
        $m_other_services = new M_other_services();
        $services = $m_other_services->get_all_service();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Other Services";
        $view = "views/v_other_services.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("services",$services);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}