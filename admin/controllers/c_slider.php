<?php
include('check_session.php');

class C_slider
{
    public function show() {
        //Model
        include("models/m_slider.php");
        $m_slider = new M_slider();
        $sliders = $m_slider->get_all_slider();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Sliders";
        $view = "views/v_slider.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("sliders",$sliders);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}