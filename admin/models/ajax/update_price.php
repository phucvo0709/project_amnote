<?php
include ("check_permission.php");
include ("./../m_prices.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_prices = new M_prices();

//sanitize data
$id = $_POST['id'];
$price = $sanitize->sanitize_input($_POST['price']);
$description = $sanitize->sanitize_input($_POST['description']);
$special = $sanitize->sanitize_input($_POST['special']);

$update = $m_prices->update_price($price, $description, $special, $id);
if($update){
    echo "<script>location.reload();</script>";
}

