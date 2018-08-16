<?php
include ("check_permission.php");
include ("./../m_users.php");

if(isset($_POST['delete_id'])){
    $m_users = new M_users();
    return $m_users->delete_user($_POST['delete_id']);
}