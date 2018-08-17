<?php
include ("check_permission.php");
include ("./../m_prices.php");

if(isset($_POST['delete_id'])){
    $m_prices = new M_prices();
    return $m_prices->delete_price($_POST['delete_id']);
}