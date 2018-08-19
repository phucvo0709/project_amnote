<?php
class C_other_service
{
    public function show()
    {
        //Model
        include("models/m_other_service.php");
        $m_other_service = new M_other_service();
        $other_services = $m_other_service->get_limit_other_service(9);
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "Order Service";
        $view = "views/v_other_service.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign('other_services', $other_services);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }

}
