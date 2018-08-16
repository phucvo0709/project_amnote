<?php

class C_news
{
    public function show()
    {
        //Model
        include("models/m_news.php");
        $m_news = new M_news();
        $news = $m_news->get_all_news();
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = "News";
        $view = "views/v_news.tpl";
        $smarty->assign("title",$title);
        $smarty->assign("news",$news);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}