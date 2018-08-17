<?php
include('check_session.php');

class C_index
{
    public function show()
    {
        //Model
        include("models/m_index.php");
        $m_index = new M_index();
        $informations = $m_index->get_all_information();
        $contacts = $m_index->get_all_contact();

        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Dashboard";
        $view = "views/v_index.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("informations",$informations);
        $smarty->assign("contacts",$contacts);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
