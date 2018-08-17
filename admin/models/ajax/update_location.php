<?php
include ("check_permission.php");
include ("./../m_prices.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_prices = new M_prices();

//sanitize data
$id = $_POST['id_location'];
$location = $sanitize->sanitize_input($_POST['location']);

$update = $m_prices->update_location($location, $id);
if($update){
    echo $location;
}

