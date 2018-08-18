<?php
include ("check_permission.php");
include ("./../m_news.php");

if(isset($_POST['delete_id'])){
    $m_news = new M_news();
    $new = $m_news->get_new($_POST['delete_id']);
    $image = './../../../' . $new->image;
    if (file_exists($image)) {
        unlink($image);
    }
    return $m_news->delete_new($_POST['delete_id']);
}