<?php
include ("check_permission.php");
include ("./../m_notice.php");

if(isset($_POST['delete_id'])){
    $m_notice = new M_notice();
    $notice = $m_notice->get_notice($_POST['delete_id']);
    $file = './../../../' . $notice->file;
    if (file_exists($file)) {
        unlink($file);
    }
    return $m_notice->delete_notice($_POST['delete_id']);
}