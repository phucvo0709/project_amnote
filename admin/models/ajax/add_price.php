<?php
include ("check_permission.php");
include ("./../m_prices.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_prices = new M_prices();
//sanitize data
$price = $sanitize->sanitize_input($_POST['price']);
$description = $sanitize->sanitize_input($_POST['description']);
$special = $sanitize->sanitize_input($_POST['special']);

$add = $m_prices->add_price($price, $description, $special);
if($add){
    echo "<script>location.reload();</script>";
}


