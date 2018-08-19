<?php

class C_new
{
    public function show()
    {
        //Model
        include("models/m_news.php");
        $m_news = new M_news();
        $id = $_GET['id'];
        $new = $m_news->get_new($id);
        $view = $new->view + 1;
        $m_news->update_view_new($view, $id);
        if($new){
            $title_new = $new->title;
        }else{
            header('Location: .');
        }
        //Controller
        include("Smarty_amnote.php");
        $smarty = new Smarty_amnote();
        $title = $title_new;
        $view = "views/v_new.tpl";
        include("c_info_company.php");
        $smarty->assign("title",$title);
        $smarty->assign("new",$new);
        $smarty->assign("view",$view);
        $smarty->display("layout.tpl");
    }
}