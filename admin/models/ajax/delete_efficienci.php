<?php
include ("check_permission.php");
include ("./../m_efficiencies.php");

if(isset($_POST['delete_id'])){
    $m_efficiencies = new M_efficiencies();
    return $m_efficiencies->delete_efficienci($_POST['delete_id']);
}