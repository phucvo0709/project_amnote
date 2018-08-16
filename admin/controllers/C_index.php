<?php
class C_index
{
    public function show()
    {
        //Model
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Dashboard";
        $view = "views/v_index.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
