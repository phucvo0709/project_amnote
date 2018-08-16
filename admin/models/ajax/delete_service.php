<?php
include ("check_permission.php");
include("./../m_other_services.php");

if(isset($_POST['delete_id'])){
    $m_other_service = new M_other_service();
    return $m_other_service->delete_service($_POST['delete_id']);
}