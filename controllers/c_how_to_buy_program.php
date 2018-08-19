<?php
/**
 * Created by PhpStorm.
 * User: Phuc Vo
 * Date: 8/15/2018
 * Time: 8:37 PM
 */

class C_how_to_buy_program
{
    public function show()
    {
        //Model

        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "How to buy program";
        $view = "views/v_how_to_buy_program.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}