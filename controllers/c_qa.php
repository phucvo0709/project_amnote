<?php
/**
 * Created by PhpStorm.
 * User: Phuc Vo
 * Date: 8/15/2018
 * Time: 9:28 AM
 */

class C_qa
{
    public function show()
    {
        //Model
        include("models/m_qa.php");
        $m_qa = new M_qa();
        $qas = $m_qa->get_all_qa();
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "Q&A";
        $view = "views/v_qa.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("qas",$qas);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}