<?php
include ("check_permission.php");
include ("./../m_qa.php");

if(isset($_POST['delete_id'])){
    $m_qa = new M_qa();
    return $m_qa->delete_qa($_POST['delete_id']);
}