<?php
include('check_session.php');

class C_qa
{
    public function show() {
        //Model
        include("models/m_qa.php");
        $m_qa = new M_qa();
        $qas = $m_qa->get_all_qa();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Q&A";
        $view = "views/v_qa.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("qas",$qas);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}