<?php
include('check_session.php');

class C_prices
{
    public function show() {
        //Model
        include("models/m_prices.php");
        $m_prices = new M_prices();
        $prices = $m_prices->get_all_price();
        $locations = $m_prices->get_all_location_price();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager Prices";
        $view = "views/v_prices.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("prices",$prices);
        $smarty->assign("locations",$locations);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}