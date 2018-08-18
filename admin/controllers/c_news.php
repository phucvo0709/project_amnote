<?php
include('check_session.php');

class C_news
{
    public function show() {
        //Model
        include("models/m_news.php");
        $m_news = new M_news();
        $news = $m_news->get_all_new();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Manager News";
        $view = "views/v_news.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("news",$news);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}