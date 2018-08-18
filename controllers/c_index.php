<?php
class C_index
{
    public function show()
    {
        //Model
        include("models/m_index.php");
        $m_index = new M_index();
        $efficiencies = $m_index->get_efficiency_index();
        $prices = $m_index->get_all_pricing();
        $locations = $m_index->get_all_location_pricing();
        $sliders = $m_index->get_all_slider();
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "Home";
        $view = "views/v_index.tpl";
        $smarty->assign("title",$title);
        $smarty->assign('sliders', $sliders);
        $smarty->assign('efficiencies', $efficiencies);
        $smarty->assign('prices', $prices);
        $smarty->assign('locations', $locations);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}
