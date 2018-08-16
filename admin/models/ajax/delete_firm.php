<?php
include ("check_permission.php");
include ("./../m_accounting_firm.php");

if(isset($_POST['delete_id'])){
    $m_accounting_firm = new M_accounting_firm();
    return $m_accounting_firm->delete_firm($_POST['delete_id']);
}