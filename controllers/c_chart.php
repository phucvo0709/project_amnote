<?php

class C_chart
{
    public function show()
    {
        //Model
        include("models/m_chart.php");
        $m_chart = new M_chart();
        $charts = $m_chart->get_efficiency_more();
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "Chart of program description";
        $view = "views/v_chart.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign("charts",$charts);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}