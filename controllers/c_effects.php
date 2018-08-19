<?php
/**
 * Created by PhpStorm.
 * User: Phuc Vo
 * Date: 8/15/2018
 * Time: 8:27 PM
 */

class C_effects
{
    public function show()
    {
        //Model

        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "Expected effects";
        $view = "views/v_effects.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}