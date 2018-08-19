<?php

class C_main_functions
{
    public function show()
    {
        //Model

        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "Main functions";
        $view = "views/v_main_functions.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}